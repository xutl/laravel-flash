<style>
    .flash-message {
        box-shadow: 0 2px 4px rgba(0, 0, 0, .12), 0 0 6px rgba(0, 0, 0, .04);
        min-width: 300px;
        box-sizing: border-box;
        border-radius: 2px;
        position: fixed;
        left: 50%;
        top: -20px;
        transform: translateX(-50%);
        background-color: #fff;
        transition: opacity .3s, transform .4s;
        overflow: hidden;
        opacity: 0;
    }

    .flash_message__group {
        margin-left: 15px;
        position: relative;
    }

    .flash_message__group p {
        font-size: 14px;
        color: #8391a5;
        padding: 5px 0 5px 40px;
        text-align: justify;
        margin-right: 50px;
        font-weight: 400;
    }

    .flash-icon {
        font-size: 30px;
        float: left;
    }

    .flash-icon-success {
        color: #13ce66;
    }

    .flash-icon-warning {
        color: #f7ba2a;
    }

    .flash-icon-error {
        color: #ff4949;
    }

    .flash-icon-info {
        color: #50bfff;
    }

    .flash-icon-close {
        position: absolute;
        top: 5px;
        right: 20px;
        color: #d5d5d5;
        font-size: 20px;
    }

    .flash-icon-close:hover {
        cursor: pointer;
    }
</style>
@if(Session::has('flash.message'))
    <div class="flash-message" style="z-index: 2109;">
        <div class="flash_message__group">
            @if(Session::get('flash.type')=='success')
                <i class="flash-icon flash-icon-success fa fa-check-circle-o"></i>
            @elseif(Session::get('flash.type')=='warning')
                <i class="flash-icon flash-icon-warning fa fa-exclamation-circle"></i>
            @elseif(Session::get('flash.type')=='error')
                <i class="flash-icon flash-icon-error fa fa-times-circle"></i>
            @elseif(Session::get('flash.type')=='info')
                <i class="flash-icon flash-icon-info fa fa-info-circle"></i>
            @endif

            <p>{{Session::get('flash.message')}}</p>
            <i class="icon-close fa fa-times"></i>
        </div>

        <script>
            jQuery('.myflash-message').animate({top: '20px', opacity: 1}).fadeIn('fast').delay(3000).fadeOut();
            jQuery('.icon-close').click(function () {
                jQuery('.myflash-message').hide();
            });
        </script>
    </div>
@endif