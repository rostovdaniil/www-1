<?php

namespace App\Controllers;

use App\Service\Security;

class ReportController extends AbstractController{
    public $model;
    public $uinModel;
    public $statuses;
    public $security;
    public $indexes;
    public $deadlines;
    public $marks;

    public function __construct() {
        $this->model    = new \App\Models\ReportModel;
        $this->uinModel = new \App\Models\UINModel;
        $this->statuses = new \App\Models\StatusModel;
        $this->users    = new \App\Models\UserModel;
        $this->indexes    = new \App\Models\IndexModel;
        $this->deadlines    = new \App\Models\DeadlineModel;
        $this->marks    = new \App\Models\MarkModel;
        $this->security = new Security();
    }

    public function reports() {
        if ($this->security->userHasRole(['ministry_boss']) && isset($_GET['district'])) {
            $districtSlug = $_GET['district'];
        } elseif ($this->security->userHasRole(['district_boss', 'district_staff'])) {
            $districtSlug = $this->user()['uin']['slug'];
        } else {
            $districtSlug = false;
        }

        $district = $this->uinModel->findOneBy(['slug' => $districtSlug]);

        if ($district) {
            $reports = [];
            $deadline = $this->deadlines->findOneBy(null,['date' => 'DESC']);
            if ($this->model->findOneBy(['deadline' => $deadline['date']])) {
                $lastReportCreated = false;
            } else {
                $lastReportCreated = true;
            }

            foreach ($this->model->findBy(['id_uin' => $district['id']]) as $key => $report) {
                if ($report['staff_ids']) {
                    $staffs = [];
                    $staffCount = 0;

                    foreach (explode(',',$report['staff_ids']) as $staffKey => $staffId) {
                        if ($staffKey == 0 || $staffKey == 1) {
                            $staffs[] = $this->users->findOneBy(['id' => $staffId]);
                        }
                        $staffCount ++;
                    }
                } else {
                    $staffs = null;
                    $staffCount = null;
                }

                $reports[$key] = [
                    'report' => $report,
                    'boss' => $this->users->findOneBy(['id' => $report['id_userBoss']]),
                    'staffs' => $staffs,
                    'staffCount' => $staffCount,
                    'status' => $this->statuses->findOneBy(['id' => $report['status']]),
                ];
            }

            $this->render('/staff/report/reports.php', [
                'reports' => $reports,
                'district' => $district,
                'lastReportCreated' => $lastReportCreated
            ]);
        } else {
            $this->security->error('404', '???????????? ???????????? ???? ????????????????????');
        }
    }

    public function report() {
        if (isset($_GET['id'])) {
            $report = $this->model->findOneBy(['id' => $_GET['id']]);

            if ($report['staff_ids']) {
                $staffs = [];
                foreach (explode(',',$report['staff_ids']) as $staffId) {
                    $staffs[] = $this->users->findOneBy(['id' => $staffId]);
                }
            } else {
                $staffs = null;
            }

            $data = [
                'report' => $report,
                'district' => $this->uinModel->findOneBy(['id' => $report['id_uin']]),
                'boss' => $this->users->findOneBy(['id' => $report['id_userBoss']]),
                'staffs' => $staffs,
                'status' => $this->statuses->findOneBy(['id' => $report['status']])
            ];

            $this->render('/staff/report/report.php', [
                'data' => $data,
                'marks' => null
            ]);
        } else {
            $this->security->error('404', '?????????? ?????????? ???? ????????????????????');
        }
    }

    public function table() {
        $marks = $this->marks->marksWithoutSV();
        $data = [];

        $currentReport  = $this->model->findOneBy(['id' => $_GET['report']]);
        $yearsQuantity  = $this->indexes->countTableYears($currentReport['id_uin']);
        $years = [];

        for ($i = 0; $i <= $yearsQuantity - 1; $i++) {
            $years[$i] = 2018 + $i;
        }

        foreach ($marks as $key => $mark) {
            $data[$key] = [
                'mark' => $mark['num'],
                'description' => $mark['name'],
                'unit' => $mark['unit'],
                'type' => $mark['type']
            ];

            foreach ($years as $year) {
                $data[$key][$year] = $this->indexes->yearIndexByMarkAndUin($currentReport['id_uin'], $mark['num'], $year);
            }
        }

        $this->render('/staff/report/table.php', [
            'data' => $data,
            'years' => $years,
            'uin' => $this->uinModel->findOneBy(['id' => $currentReport['id_uin']]),
            'report' => $currentReport
        ]);
    }

    public function indexIsValid($mark, $data, $report) {
        $reportUIN = $this->uinModel->findOneBy(['id' => $report['id_uin']]);
        $sendMethod = null;

        $reportHaveDistrictData = $this->indexes->indexByMarkReportAndUinType($mark, $report['id'], 'district') ?? false;
        $reportHaveMinistryData = $this->indexes->indexByMarkReportAndUinType($mark, $report['id'], 'ministry') ?? false;

        return true;
    }

    public function svTable() {
        $report = $this->model->findOneBy(['id' => $_GET['report']]);
        $marks = $this->marks->marksWithoutSV();

        $this->indexIsValid(
            1,
            [
                'district' => 1,
                'action' => 0,
                'result' => null,
            ],
            [
                'id' => 55,
                'id_uin' => 4
            ]
        );

        if ($_POST) {
//            if ($this->security->userHasRole(['ministry_boss', 'ministry_staff'])) {
//                foreach ($_POST['marks'] as $mark => $data) {
//                    if ($data['ministry']) {
//                        pa('fd');
//                    }
//                }
//            }

//            foreach ($_POST['marks'] as $mark => $data) {
//                if ($this->indexIsValid($mark, $data, $report)) {
//                    pa('valid');
//                }
//
//                if ($data['district']) {
//                    $this->indexes->add([
//                        'id_user' => $this->user()['id'],
//                        'id_mark' => $mark,
//                        'id_report' => $report['id'],
//                        'id_uin' => $report['id_uin'],
//                        'id_status' => 6,
//                        'index' => $data['district'],
//                        'date' => new \DateTime('now')
//                    ]);
//                }
//            }
        }

        $this->render('/staff/report/sv_table.php', [
            'marks' => $marks,
            'uin' => $this->uinModel->findOneBy(['id' => $report['id_uin']]),
        ]);
    }

    public function new() {
        $deadline = $this->deadlines->findOneBy(null,['date' => 'DESC']);

        // ???????? ???? ???????????????????? ???????????? ?? ?????????????????? ?????????? ???? ?????????????? deadline ???? ?????????????? ?????????????? ??????????
        if (!$this->model->findOneBy(['deadline' => $deadline['date']])) {
            $district = $this->uinModel->findOneBy(['id' => $this->user()['uin']['id']]);
            $deadline = $this->deadlines->findOneBy(null,['date' => 'DESC']);

            if ($_POST && $this->formIsValid(['report_staff', 'report_description'])) {
                $staffs = implode(',', $_POST['report_staff']);
                $entries['staff_ids'] = $staffs;
                $entries['description'] = $_POST['report_description'];

                $entries['name'] = $deadline['name'];
                $entries['deadline'] = (new \DateTime($deadline['date']));
                $entries['creating'] = (new \DateTime('now'));

                $entries['id_userBoss'] = $this->user()['id'];
                $entries['id_uin'] = $this->user()['id_uin'];
                $entries['status'] = 3;

                $this->model->add($entries);

                $this->redirectToRoute('/reports');
            }

            $this->render('/staff/report/form.php', [
                'staffs' => $this->users->findBy(['id_uin' => $this->user()['uin']['id'], 'id_role' => 5]),
                'district' => $district,
                'deadline' => $deadline
            ]);
        } else {
            $this->security->error('404', '?????????? ???? ?????????????????? ?????? ?????? ????????????');
        }
    }
}
