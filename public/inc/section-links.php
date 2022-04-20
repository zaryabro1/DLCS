                <div class='section-links'>
                    <div class='link fade-in-up'>
                        <a href='https://dlcs.cc' target='_blank'>
                            <div class='link-img'>
                                <span>D</span>
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>Delicious.</span>
                                <span class='link-subtitle'>Free Online Calling Cards</span>
                            </div></div>
                        </a>
                        <div class='link-mover'><div class='link-mover-inner'>
                            <div class='link-move-arrow link-up'>
<?php include('img/up.php') ?>    
                            </div>
                            <div class='link-move-arrow link-down'>
<?php include('img/down.php') ?>                                
                            </div>
                        </div></div>
                    </div>
                    <div class='link fade-in-up'>
                        <a href='https://liverainiersquare.com' target='_blank'>
                            <div class='link-img'>
                                <span>R</span>
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>Rainier Square</span>
                                <span class='link-subtitle'>The tallest residential building in Seattle</span>
                            </div></div>
                        </a>
                        <div class='link-mover'><div class='link-mover-inner'>
                            <div class='link-move-arrow link-up'>
<?php include('img/up.php') ?>    
                            </div>
                            <div class='link-move-arrow link-down'>
<?php include('img/down.php') ?>                                
                            </div>
                        </div></div>
                    </div>
                    <div class='link fade-in-up'>
                        <a href='https://circala.com' target='_blank'>
                            <div class='link-img'>
                                <span>C</span>
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>Circa LA</span>
                                <span class='link-subtitle'>High Rise Towers in DTLA</span>
                            </div></div>
                        </a>
                        <div class='link-mover'><div class='link-mover-inner'>
                            <div class='link-move-arrow link-up'>
<?php include('img/up.php') ?>    
                            </div>
                            <div class='link-move-arrow link-down'>
<?php include('img/down.php') ?>                                
                            </div>
                        </div></div>
                    </div>
                    <div class='link fade-in-up'>
                        <a href='https://theemeraldseattle.com' target='_blank'>
                            <div class='link-img'>
                                <span>E</span>
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>The Emerald Seattle</span>
                                <span class='link-subtitle'>Seattle's defining address</span>
                            </div></div>
                        </a>
                        <div class='link-mover'><div class='link-mover-inner'>
                            <div class='link-move-arrow link-up'>
<?php include('img/up.php') ?>    
                            </div>
                            <div class='link-move-arrow link-down'>
<?php include('img/down.php') ?>                                
                            </div>
                        </div></div>
                    </div>
                    <div class='link fade-in-up'>
                        <a href='https://www.studiofabric.com/' target='_blank'>
                            <div class='link-img'>
                                <span>F</span>
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>Studio Fabric</span>
                                <span class='link-subtitle'>Audentes fortuna iuvat.</span>
                            </div></div>
                        </a>
                        <div class='link-mover'><div class='link-mover-inner'>
                            <div class='link-move-arrow link-up'>
<?php include('img/up.php') ?>    
                            </div>
                            <div class='link-move-arrow link-down'>
<?php include('img/down.php') ?>                                
                            </div>
                        </div></div>
                    </div>
                </div>

                <script>
                    $('.link-up').on('click', function () {
                        var hook = $(this).closest('.link').prev('.link');
                        if (hook.length) {
                            var elementToMove = $(this).closest('.link').detach();
                            hook.before(elementToMove);
                        }
                    });
                    $('.link-down').on('click', function () {
                        var hook = $(this).closest('.link').next('.link');
                        if (hook.length) {
                            var elementToMove = $(this).closest('.link').detach();
                            hook.after(elementToMove);
                        }
                    });
                </script>