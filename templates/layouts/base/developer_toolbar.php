<style>
    .developer-toolbar {
        justify-content: center;
        background: #222;
        position: fixed;
        display: flex;
        height: 50px;
        width: 100%;
        bottom: 0;
    }

    .developer-toolbar .developer-title {
        position: absolute;
        padding-left: 20px;
        line-height: 50px;
        font-size: 12px;
        color: #d78080;
        height: 50px;
        top: 0;
        left: 0;
    }

    .developer-toolbar .developer-title i {
        font-size: 10px;
        margin-right: 3px;
    }

    .developer-toolbar .developer-button {
        justify-content: center;
        align-items: center;
        position: relative;
        padding: 0 20px;
        cursor: pointer;
        display: flex;
    }

    .developer-toolbar .developer-button:hover {
        background-color: rgba(0,0,0,0.3);
    }

    .developer-toolbar .developer-user-indicator {
        background: #EE4343;
        border-radius: 10px;
        position: absolute;
        height: 5px;
        bottom: 8px;
        left: 25px;
        width: 5px;
    }

    .developer-toolbar.online .developer-user-indicator {
        background: #61b252;
    }

    .developer-toolbar .developer-button .username {
        margin-left: 8px;
    }

    .developer-toolbar .developer-button-dropdown {
        flex-direction: column;
        position: absolute;
        padding: 16px 18px;
        border-radius: 8px;
        min-width: 300px;
        background: #222;
        display: none;
        bottom: 58px;
        cursor: auto;
    }

    .developer-toolbar .developer-button:hover .developer-button-dropdown {
        display: flex;
    }

    .developer-toolbar .developer-button-dropdown .list-item {
        margin-bottom: 12px;
    }

    .developer-toolbar .developer-button-dropdown .list-item:last-child {
        margin: unset;
    }
</style>

<div class="developer-toolbar online">
    
        <span class="developer-title"> <i class="icon-darhboard_alt"></i> Режим разработчика</span>

        <span class="developer-button">
            <span class="developer-user-indicator"></span>
            <i class="icon-user"></i> <span class="username">deniev</span>
            <span class="developer-button-dropdown">
                <span class="list-item"><b>Имя пользователя:</b> deniev</span>
                <span class="list-item"><b>Роли:</b> VILLAGE_STAFF, VILLAGE_BOSS</span>
                <span class="list-item"><b>UIN:</b> CHR_GRR</span>
                <span class="list-item"><b>Email:</b> magomed@deniev.com</span>
            </span>
        </span>
        <span class="developer-button">
            <i class="icon-setting"></i>
        </span>
        <span class="developer-button">
            <i class="icon-lock"></i>
        </span>

</div>