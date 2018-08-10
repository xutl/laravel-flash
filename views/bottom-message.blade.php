<style>
    .flash {
        font-family: Arial, sans-serif;
        padding: 12px 35px;
        border-radius: 4px;
        font-weight: 400;
        position: fixed;
        bottom: 20px;
        right: 20px;
        font-size: 16px;
        color: #fff;
    }

    .flash-success {
        background-color: #99c93d;
        color: #fff;
    }

    .flash-warning {
        background-color: #f7ba2a;
        color: #fff;
    }

    .flash-error {
        background-color: #ff4949;
        color: #fff;
    }

    .flash-info {
        background-color: #50bfff;
        color: #fff;
    }
</style>

@if(Session::has('flash.message'))
    <div class="flash flash-{{ Session::get('flash.type') }}">
        <span class="flash__body">{{Session::get('flash.message')}}</span>
    </div>
    <script>
        jQuery('.flash').hide().fadeIn(500).delay(3000).animate({
            marginRight: "-100%"
        }, 1000, function () {
            jQuery(this).remove();
        });
    </script>
@endif