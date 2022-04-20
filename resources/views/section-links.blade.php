                <div class='section-links' id="links_list" >
                    @foreach($links as $link)
                    <div class='link fade-in-up'data-id='{{$link->id}}'>
                        <a href='{{$link->url}}' target='_blank'>
                            <div class='link-img'>
                                <span>{{$link->first_letter}}</span>
                                <!-- <span>{{$link->first_letter}}</span> -->
                            </div>
                            <div class='table-table'><div class='table-cell'>
                                <span class='link-title'>{{$link->name}}</span>
                                <span class='link-subtitle'>{{$link->description}}</span>
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
                    @endforeach
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