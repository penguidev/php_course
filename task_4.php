<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>

<body class="mod-bg-1 mod-nav-link ">
    <main id="js-page-content" role="main" class="page-content">
        <div class="col-md-6">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>
                        Задание
                    </h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <?php
                        $p_bars = [
                            [
                                'mb_val' => 'mb-3',
                                'p_title' => 'Taski',
                                'p_text_val' => '130/500',
                                'bg_color' => 'bg-fusion-400',
                                'p_value_style' => '69%',
                                'p_value_aria' => '69'  
                            
                            ], 
                            [
                                'mb_val' => 'mb-3',
                                'p_title' => 'Transfered',
                                'p_text_val' => '440 TB',
                                'bg_color' => 'bg-success-500',
                                'p_value_style' => '96%',
                                'p_value_aria' => '96'  
                            ],
                            [
                                'mb_val' => 'mb-3',
                                'p_title' => 'Bugs',
                                'p_text_val' => '77%',
                                'bg_color' => 'bg-info-400',
                                'p_value_style' => '69%',
                                'p_value_aria' => '69'   
                            ],
                            [
                                'mb_val' => 'mb-g',
                                'p_title' => 'Testing',
                                'p_text_val' => '7 days',
                                'bg_color' => 'bg-primary-300',
                                'p_value_style' => '96%',
                                'p_value_aria' => '96'  
                            ],
                        ]
                        ?>
                        <?php foreach($p_bars as $p_bar): ?>
                        <div class="d-flex mt-2">
                            <?php echo $p_bar['p_title']; ?>
                            <span class="d-inline-block ml-auto"><?php echo $p_bar['p_text_val']; ?></span>
                        </div>
                        <div class="progress progress-sm <?php echo $p_bar['mb_val']; ?>">
                            <div class="progress-bar <?php echo $p_bar['bg_color']; ?>" role="progressbar" style="width: <?php echo $p_bar['p_value_style']; ?>;" aria-valuenow="<?php echo $p_bar['p_value_aria']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="js/vendors.bundle.js"></script>
    <script src="js/app.bundle.js"></script>
    <script>
        // default list filter
        initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
        // custom response message
        initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
    </script>
</body>

</html>