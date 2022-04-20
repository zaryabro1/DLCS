                <div class='section-gallery fade-in-up'>
                    @foreach($files as $file)
                        <div class='gallery-img-wrapper aspect-wrapper'>
                            <div class='aspect-content gal-image gal-image-01' style="background-image: url('{{asset('storage/'.$file->file_name)}}');"></div>
                            <div class='aspect-1-1'></div>
                        </div>
                    @endforeach
                    <!-- C:\laragon\www\dlcs\storage\app\uploads\1649760911.jpg -->
                    <!-- storage\app\uploads\1649760911.jpg -->
                    <!-- <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-01' style='background-image: url(./img/720-1.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-02' style='background-image: url(./img/720-2.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-03' style='background-image: url(./img/720-3.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-04' style='background-image: url(./img/720-4.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-05' style='background-image: url(./img/720-5.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-06' style='background-image: url(./img/720-6.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-07' style='background-image: url(./img/720-7.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-08' style='background-image: url(./img/720-8.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div>
                    <div class='gallery-img-wrapper aspect-wrapper'>
                        <div class='aspect-content gal-image gal-image-09' style='background-image: url(./img/720-9.jpg);'></div>
                        <div class='aspect-1-1'></div>
                    </div> -->
                </div>