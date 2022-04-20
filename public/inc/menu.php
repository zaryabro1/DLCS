<div class='menu'>
                <div class='menu-item edit'>
                    <span>Edit</span>
                    <div class='menu-icon'>
<?php include_once('img/edit.php') ?>
                    </div>
                </div>
                <div class='menu-item theme'>
                    <span>Theme</span>
                    <div class='menu-icon'>
<?php include_once('img/theme.php') ?>
                    </div>
                </div>
                <div class='menu-item settings'>
                    <span>Settings</span>
                    <div class='menu-icon'>
<?php include_once('img/settings.php') ?>
                    </div>
                </div>
                <div onclick="save_data()" class='menu-item save'>
                    <span>Save</span>
                    <div class='menu-icon'>
<?php include('img/up.php') ?>
                    </div>
                </div>
                <a class='menu-item logout' href='/logout'>
                    <span>Logout</span>
                    <div class='menu-icon'>
<?php include_once('img/logout.php') ?>
                    </div>
                </a>
            </div>
            <div class='menu-toggle'>
                <div class='menu-animator dots'>
                    <div class='dot'></div>
                    <div class='dot'></div>
                    <div class='dot'></div>
                    <div class='line'></div>
                    <div class='line'></div>
                </div>
            </div>