<?php $this->load->view('admin/includes/admin_header'); ?>
<style type="text/css">
            .laptop {
    position: relative;
    perspective: 2000px;
    z-index: 0;
}
.bright-theme .shadow {
    box-shadow: 0 0 125px rgb(0 0 0 / 15%);
}

.laptop .screen {
    background: #fff;
    width: 100%;
    height: 245px;
    position: relative;
    margin: auto;
    padding: 3px;
    box-shadow: 1px 2px 3px rgb(0 0 0 / 20%), inset 0 0 2px rgb(255 255 255 / 50%);
    border-radius: 10px;
    overflow: hidden;
    transform: translate3d(0,0,0);
    backface-visibility: hidden;
}
.laptop .keyboard {
    position: relative;
    overflow: hidden;
    width: 100%;
    height: 235px;
    margin: auto;
    margin-top: 10px;
    background-color: #dfdfdf;
    background-image: -moz-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#dfdfdf),to(#f7f5f1));
    background-image: -webkit-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: -o-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: linear-gradient(top,#dfdfdf,#f7f5f1);
    box-shadow: 1px 2px 3px rgb(0 0 0 / 20%), inset 0 0 2px rgb(255 255 255 / 50%);
    padding: 20px 25px;
    border-radius: 10px;
    backface-visibility: hidden;
    transform-style: preserve-3d;
    transform: rotateX(45deg);
    transform-origin: 0 0;
}
.laptop .key.disabled {
    opacity: .9;
}
.laptop .key {
    width: 35px;
}
.laptop .key {
    color: #000;
    /*position: absolute;
    left: 0;*/
    display: inline-block;
    height: 35px;
    /*width: 30px;*/
    /* padding: 5px; */
    line-height: 25px;
    text-align: center;
    font-size: 12px;
    /* font-weight: bold; */
    text-transform: uppercase;
    /* vertical-align: middle; */
    border: 1px solid rgba(112,112,112,0.5);
    border-radius: 5px;
    /* background-clip: padding-box; */
    background-color: #f7f5f1;
    box-shadow: 1px 2px 3px rgb(0 0 0 / 10%), inset 0 0 2px rgb(255 255 255 / 50%);
    background-image: -moz-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: -webkit-gradient(linear,left top,left bottom,from(#dfdfdf),to(#f7f5f1));
    background-image: -webkit-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: -o-linear-gradient(top,#dfdfdf,#f7f5f1);
    background-image: linear-gradient(top,#dfdfdf,#f7f5f1);
        margin-bottom: 5px;
}


.laptop .key sub, .laptop .key sup {
    font-size: 90%;
    margin: 2px;
}
sub {
    bottom: -.25em;
}


sup {
    top: -.5em;
}
sub, sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}
.laptop .key-13>div, .laptop .key-enter>div, .laptop .key-tab>div, .laptop .key-lalt>div, .laptop .key-ralt>div, .laptop .key-fn>div, .laptop .key-ctrl>div, .laptop .key-8>div, .laptop .key-backspace>div, .laptop .key-20>div, .laptop .key-capslock>div, .laptop .key-lshift>div, .laptop .key-lmeta>div, .laptop .key-rmeta>div, .laptop .key-rshift>div, .laptop .key-32>div, .laptop .key-space>div {
    /*position: absolute;*/
    font-size: 12px;
    
    left: 5px;
    bottom: 5px;
    text-transform: none;
}
.laptop .key-32, .laptop .key-space {
    width: 306px;
}
.laptop .key-tab, .laptop .key-8, .laptop .key-backspace {
    width: 85px;
}
.laptop .ansi .key-13 {
    width: 83px;
    border-bottom-right-radius: 5px;
}
.laptop .ansi .key-lshift {
    width: 104px;
}
.laptop .key-rshift {
    width: 104px;
}
.laptop .key-rmeta, .laptop .key-lmeta{
    width: 45px;
}
.laptop .key-20, .laptop .key-capslock {
    width: 90px;
}
.laptop .key-13>div.enter-bottom, .laptop .key-enter>div.enter-bottom {
    background: #f7f5f1;
}
.laptop .key-92 {
    width: 56px;
}
.laptop .key-8 {
    width: 108px;
}
.laptop .key-13>div.enter-bottom, .laptop .key-enter>div.enter-bottom {
    width: 34px;
    border-top-right-radius: 0;
    border-top-left-radius: 0;
    border-top: 0;
    height: 56px;
    top: 47px;
    left: 16px;
    opacity: 1 !important;
}
.laptop .ansi .enter-bottom {
    display: none;
}
.laptop .hands {
        position: absolute;
    bottom: 30px;
    left: 28%;
    /* margin-left: -148px; */
    /* width: 279px; */
    height: 150px;
    padding-left: 10px;
    transform: translate3d(0,-12px,135px);
    backface-visibility: hidden;
}
.laptop .hand {
       margin: 0 5px;
    width: 100px;
    float: left;
}
.laptop .hand-b, .laptop .finger {
    border-color: #777;
    background: #fff;
}
.laptop .finger-0 {
    margin-top: 80px;
    height: 40px;
    margin-left: 0;
}
.laptop .finger-1 {
       margin-top: 50px;
    height: 70px;
}
.laptop .finger-2 {
       margin-top: 33px;
    height: 87px;
}
.laptop .finger-3 {
       margin-top: 60px;
    height: 60px;
}
.laptop .finger-4 {
    margin-top: 95px;
    height: 25px;
    transform: translate3d(0,0,1px);
}
.laptop .finger-5 {
        margin-top: 96px;
    height: 30px;
    margin-left: 0;
    transform: translate3d(0,0,1px);
}
.laptop .finger-6 {
       margin-top: 55px;
    height: 70px;
}
.laptop .finger-7 {
    margin-top: 32px;
    height: 93px;
}
.laptop .finger-8 {
       margin-top: 65px;
    height: 60px;
}
.laptop .finger-9 {
   margin-top: 86px;
    height: 40px;
}
.hand-b-r{
    height: 60px;
}
.laptop .finger-active-0 .finger-0, .laptop .finger-active-1 .finger-1, .laptop .finger-active-2 .finger-2, .laptop .finger-active-3 .finger-3, .laptop .finger-active-4 .finger-4, .laptop .finger-active-5 .finger-5, .laptop .finger-active-6 .finger-6, .laptop .finger-active-7 .finger-7, .laptop .finger-active-8 .finger-8, .laptop .finger-active-9 .finger-9 {
    background: #3a5f9e;
}
.laptop .finger {
    float: left;
    width: 15px;
    border: 1px solid #777;
    margin-left: 2px;
    border-bottom: 0;
    border-top-left-radius: 17px;
    border-top-right-radius: 17px;
}
.laptop .hand-b, .laptop .finger {
    border-color: #777;
    background: #fff;
}

.laptop .hand-b {
        float: left;
    border: 1px solid #777;
    border-top: 0;
    width: 83px;
    height: 65px;
    margin-top: 0px;
    border-bottom-left-radius: 60px;
    border-bottom-right-radius: 60px;
    margin-left: 2px;
}
.screen-content{
    padding: 30px;
    font-size: 18px;
    line-height: 26px;
    word-spacing: 5px;
    letter-spacing: 2px;
    font-weight: 600;
}
   
</style>
    <main>
        
        <div class="row">
            <div class="col-lg-7 typing">
                <div class="laptop">
                    <div class="screen shadow">
                        <div class="screen-border">
                            <div class="screen-display">
                                <p class="screen-content" id="screen_content">
                                    
                                         Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                  
                                </p>
                                <!-- <div class="indicators clearfix">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th><span>Accuracy</span></th>
                                                <th colSpan="2"><span>Speed</span></th>
                                                <th><span>Time</span></th>
                                                <th><span>Errors</span></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><h3><b>100</b><small>%</small></h3></td>
                                                <td class="wpm"><h3><b>0</b><small>WPM</small></h3></td>
                                                <td><h3><b>0</b><small>CPM</small></h3>
                                                </td><td><h3><b>0</b><small>s</small></h3></td>
                                                <td><h3><b>0</b>/<small>0</small></h3></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> -->
                                <div class="text unselectable text-center"></div>
                            </div>
                            <div></div>
                        </div>
                    </div>
                    <div class="keyboard shadow unselectable short ansi">
                        <div class="">
                            <div class="key key-96 disabled">
                            <div>
                                <span><sub>`</sub><sup>~</sup></span>
                            </div>
                        </div>
                        <div class="key key-49 disabled">
                            <div>
                                <span><sub>1</sub><sup>!</sup></span>
                            </div>
                        </div>
                        <div class="key key-50 disabled">
                            <div>
                                <span><sub>2</sub><sup>@</sup></span>
                            </div>
                        </div>
                        <div class="key key-51 disabled">
                            <div>
                                <span><sub>3</sub><sup>#</sup></span>
                            </div>
                        </div>
                        <div class="key key-52 disabled">
                            <div>
                                <span><sub>4</sub><sup>$</sup></span>
                            </div>
                        </div>
                        <div class="key key-53 disabled">
                            <div>
                                <span><sub>5</sub><sup>%</sup></span>
                            </div>
                        </div>
                        <div class="key key-54 disabled">
                            <div>
                                <span><sub>6</sub><sup>^</sup></span>
                            </div>
                        </div>
                        <div class="key key-55 disabled">
                            <div>
                                <span><sub>7</sub><sup>&amp;</sup></span>
                            </div>
                        </div>
                        <div class="key key-56 disabled">
                            <div>
                                <span><sub>8</sub><sup>*</sup></span>
                            </div>
                        </div>
                        <div class="key key-57 disabled">
                            <div>
                                <span><sub>9</sub><sup>(</sup></span>
                            </div>
                        </div>
                        <div class="key key-48 disabled">
                            <div>
                                <span><sub>0</sub><sup>)</sup></span>
                            </div>
                        </div>
                        <div class="key key-45 disabled">
                            <div>
                                <span><sub>-</sub><sup>_</sup></span>
                            </div>
                        </div>
                        <div class="key key-61 disabled">
                            <div>
                                <span><sub>=</sub><sup>+</sup></span>
                            </div>
                        </div>
                        <div class="key key-8 disabled">
                            <div>backspace</div>
                        </div>
                    </div>
                    <div>
                        <div class="key key-tab disabled">
                            <div>tab</div>
                        </div>
                        <div class="key key-113 disabled">
                            <div>q</div>
                        </div>
                        <div class="key key-119 disabled">
                            <div>w</div>
                        </div>
                        <div class="key key-101 disabled">
                            <div>e</div>
                        </div>
                        <div class="key key-114 disabled">
                            <div>r</div>
                        </div>
                        <div class="key key-116 disabled">
                            <div>t</div>
                        </div>
                        <div class="key key-121 disabled">
                            <div>y</div>
                        </div>
                        <div class="key key-117 disabled">
                            <div>u</div>
                        </div>
                        <div class="key key-105 disabled">
                            <div>i</div>
                        </div>
                        <div class="key key-111 disabled">
                            <div>o</div>
                        </div>
                        <div class="key key-112 disabled">
                            <div>p</div>
                        </div>
                        <div class="key key-91 disabled">
                            <div>
                                <span><sub>[</sub><sup>{</sup></span>
                            </div>
                        </div>
                        <div class="key key-93 disabled">
                            <div>
                                <span><sub>]</sub><sup>}</sup></span>
                            </div>
                        </div>
                        <div class="key key-92 disabled">
                            <div>
                                <span><sub>\</sub><sup>|</sup></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="key key-20 disabled">
                            <div>capslock</div>
                        </div>
                        <div class="key key-97 disabled">
                            <div>a</div>
                        </div>
                        <div class="key key-115 disabled">
                            <div>s</div>
                        </div>
                        <div class="key key-100 disabled">
                            <div>d</div>
                        </div>
                        <div class="key key-102 disabled">
                            <div>f</div>
                        </div>
                        <div class="key key-103 disabled">
                            <div>g</div>
                        </div>
                        <div class="key key-104 disabled">
                            <div>h</div>
                        </div>
                        <div class="key key-106 disabled">
                            <div>j</div>
                        </div>
                        <div class="key key-107 disabled">
                            <div>k</div>
                        </div>
                        <div class="key key-108 disabled">
                            <div>l</div>
                        </div>
                        <div class="key key-59 disabled">
                            <div>
                                <span><sub>;</sub><sup>:</sup></span>
                            </div>
                        </div>
                        <div class="key key-39 disabled">
                            <div>
                                <span><sub>&#x27;</sub><sup>&quot;</sup></span>
                            </div>
                        </div>
                        <div class="key key-13 disabled">
                            <div>enter</div>
                            <div class="key enter-bottom"></div>
                        </div>
                    </div>
                    <div>
                        <div class="key key-lshift disabled">
                            <div>lshift</div>
                        </div>
                        <div class="key key-122 disabled">
                            <div>z</div>
                        </div>
                        <div class="key key-120 disabled">
                            <div>x</div>
                        </div>
                        <div class="key key-99 disabled">
                            <div>c</div>
                        </div>
                        <div class="key key-118 disabled">
                            <div>v</div>
                        </div>
                        <div class="key key-98 disabled">
                            <div>b</div>
                        </div>
                        <div class="key key-110 disabled">
                            <div>n</div>
                        </div>
                        <div class="key key-109 disabled">
                            <div>m</div>
                        </div>
                        <div class="key key-44 disabled">
                            <div>
                                <span><sub>,</sub><sup>&lt;</sup></span>
                            </div>
                        </div>
                        <div class="key key-46 disabled">
                            <div>
                                <span><sub>.</sub><sup>&gt;</sup></span>
                            </div>
                        </div>
                        <div class="key key-47 disabled">
                            <div>
                                <span><sub>/</sub><sup>?</sup></span>
                            </div>
                        </div>
                        <div class="key key-rshift disabled">
                            <div>rshift</div>
                        </div>
                    </div>
                    <div>
                        <div class="key key-fn disabled">
                            <div>fn</div>
                        </div>
                        <div class="key key-ctrl disabled">
                            <div>ctrl</div>
                        </div>
                        <div class="key key-lalt disabled">
                            <div>lalt</div>
                        </div>
                        <div class="key key-lmeta disabled">
                            <div>lmeta</div>
                        </div>
                        <div class="key key-32 disabled">
                            <div>space</div>
                        </div>
                        <div class="key key-rmeta disabled">
                            <div>rmeta</div>
                        </div>
                        <div class="key key-ralt disabled">
                            <div>ralt</div>
                        </div>
                    </div>
                    </div>
                    <div class="hands finger-active-0">
                        <div class="hand hand-l">
                            <div class="finger finger-0"></div>
                            <div class="finger finger-1"></div>
                            <div class="finger finger-2"></div>
                            <div class="finger finger-3"></div>
                            <div class="finger finger-4"></div>
                            <div class="hand-b hand-b-l shadow"></div>
                        </div>
                        <div class="hand hand-r">
                            <div class="finger finger-5"></div>
                            <div class="finger finger-6"></div>
                            <div class="finger finger-7"></div>
                            <div class="finger finger-8"></div>
                            <div class="finger finger-9"></div>
                            <div class="hand-b hand-b-r shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-primary" id="start" tabindex="0">Start Test</button>
            </div>
        </div>

       
    </main>
<?php $this->load->view('admin/includes/chat_footer'); ?>

<script type="text/javascript">
    $(document).ready(function(){
         var current_content = $('#screen_content').text();
                var trim_data = $.trim(current_content);
                var data = trim_data.split('');
                $.each(data,function(i,l){
                    const charSpan = document.createElement('span');
                    charSpan.innerText = l[i];
                    $('#screen_content').append(charSpan);
                });
                
                $('#screen_content').html();
           $('#start').keydown(function(evt) {
                evt = evt || window.event;
                var code = evt.keyCode;
                console.log("keydown: " + evt.keyCode);
            });
});
</script>