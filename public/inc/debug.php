<div class='debug-panel'>
    <div class='table-table'><div class='table-cell'>
        <div class='debug-panel-inner'>
            <select name='color' id='color'>
                <option disabled='' selected=''>Color Scheme (Semi-Defunct)</option>
                <option value='0'>None</option>
                <option value='1'>Monster</option>
                <option value='2'>Plum Crazy</option>
                <option value='3'>Slap Wrap</option>
                <option value='4'>RTJ Legacy</option>
                <option value='5'>Run the Jewels</option>
                <option value='6'>Solo Jazz</option>
                <option value='7'>Grandma Candle</option>
            </select>
            <div class='debug-console-wrapper'>
                <div class='debug-console'>
                </div>
            </div>
        </div>
    </div></div>
    <span class='debug-toggle'>&lt;&lt; Debug &gt;&gt;</span>
</div>

<style>


    /* ====== Debug Menu ====== */

    .debug-panel {
        position: fixed;
        left: 0;
        top: 56px;
        background-color: rgba(0,0,0,0.05);
        /*height: 128px;*/
        width: 80%;
        padding: 16px 32px 16px 16px;
        z-index: 998;
        transform: translateX(calc(-100% + 32px));
        transition: transform 0.35s ease-in-out, background-color 0.35s ease-in-out;
    }

    .debug-toggle {
        position: absolute;
        width: 192px;
        height: 32px;
        line-height: 32px;
        text-align: center;
        font-family: 'VCROSDMono';
        text-transform: uppercase;
        font-size: 1.2rem;
        letter-spacing: 1.5px;
        top: 0;
        right: -192px;
        color: rgba(0,0,0,0.5);
        transform-origin: 0% 0%;
        transform: rotate(90deg);
        cursor: pointer;
        transition: color 0.35s ease-in-out;
    }

    .debug-panel.active {
        transform: translateX(0);
        background-color: rgba(0,0,0,0.67);
    }

    .debug-panel.active .debug-toggle {
        color:  #fff;
    }


    .debug-panel select {
        position: relative;
        display: block;
        width: 100%;
        color: #fff;
        border-top: 1px solid transparent;
        border-right: 1px solid transparent;
        border-left: 1px solid transparent;
        border-bottom: 1px solid #fff;
        margin: 8px 0;
        font-family: 'Apercu';
        font-size: 1.2rem;
        line-height: 24px;
        height: 24px;
        outline: none;

        padding: 0 12px 0 0;
        background: url(./img/common/dd-arrow-fff.png) right center no-repeat;
        background-size: 9px 18px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        -moz-text-indent: -2px;
    }

    @-moz-document url-prefix() { 
        .debug-panel select {
            text-indent: -2px
        }
    }

    /* prevents white-on-white issues in Chrome */
    .debug-panel select option, .debug-panel optgroup {
        background-color: #fff;
        color: #000;
        -webkit-appearance: none;
    }

    .debug-console-wrapper {
        position: relative;
        overflow: auto;
        display: flex;
        flex-direction: column-reverse;
        height: 120px;
    }

    .debug-console {
        position: relative;
        display: block;
        width: 100%;
    }

    .debug-console span {
        position: relative;
        display: block;
        width: 100%;
        font-family: 'Apercu';
        font-size: 1rem;
        color: #fff;
        text-align: left;
        line-height: 1;
        margin-bottom: 4px;
    }


</style>

<script>

    $(document).on('click', '.debug-toggle', function(){
        $('.debug-panel').toggleClass('active');
    });

    // var colorSelected = $( "#color" ).val();
    // var fontSelected = $( "#title-font" ).val();

    $('#color').on("change", function(){
        console.log($('#color').val());
        if        ( $('#color').val() == 1 ) {
            $('body').removeClass('color-2 color-3 color-4 color-5 color-6 color-7').addClass('color-1');
        } else if ( $('#color').val() == 2 ) {
            $('body').removeClass('color-1 color-3 color-4 color-5 color-6 color-7').addClass('color-2');
        } else if ( $('#color').val() == 3 ) {
            $('body').removeClass('color-1 color-2 color-4 color-5 color-6 color-7').addClass('color-3');
        } else if ( $('#color').val() == 4 ) {
            $('body').removeClass('color-1 color-2 color-3 color-5 color-6 color-7').addClass('color-4');
        } else if ( $('#color').val() == 5 ) {
            $('body').removeClass('color-1 color-2 color-3 color-4 color-6 color-7').addClass('color-5');
        } else if ( $('#color').val() == 6 ) {
            $('body').removeClass('color-1 color-2 color-3 color-4 color-5 color-7').addClass('color-6');
        } else if ( $('#color').val() == 7 ) {
            $('body').removeClass('color-1 color-2 color-3 color-4 color-5 color-6').addClass('color-7');
        } else {
            $('body').removeClass('color-1 color-2 color-3 color-4 color-5 color-6 color-7');
        }
    });


    
</script>