<?php $this->load->view('admin/includes/admin_header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/typing.css">
<style type="text/css">

   
</style>
    <main>
        
        <div class="row">
            <div class="col-lg-7 typing">
                <div class="laptop">
                    <div class="screen shadow">
                        <div class="overlay">
                            <div class="overlay_text">
                                Click On start Button To start typing...
                            </div> 
                        </div>
                        <div class="screen-border">
                            <div class="screen-display">
                                <p class="screen-content" id="screen_content">
                                   
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
                            <div class="key key-192 disabled">
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
                            <div class="key key-189 disabled">
                                <div>
                                    <span><sub>-</sub><sup>_</sup></span>
                                </div>
                            </div>
                            <div class="key key-187 disabled">
                                <div>
                                    <span><sub>=</sub><sup>+</sup></span>
                                </div>
                            </div>
                            <div class="key key-8 disabled">
                                <div>backspace</div>
                            </div>
                        </div>
                    <div>
                        <div class="key key-tab key-9 disabled">
                            <div>tab</div>
                        </div>
                        <div class="key key-81 disabled">
                            <div>q</div>
                        </div>
                        <div class="key key-87 disabled">
                            <div>w</div>
                        </div>
                        <div class="key key-69 disabled">
                            <div>e</div>
                        </div>
                        <div class="key key-82 disabled">
                            <div>r</div>
                        </div>
                        <div class="key key-84 disabled">
                            <div>t</div>
                        </div>
                        <div class="key key-89 disabled">
                            <div>y</div>
                        </div>
                        <div class="key key-85 disabled">
                            <div>u</div>
                        </div>
                        <div class="key key-73 disabled">
                            <div>i</div>
                        </div>
                        <div class="key key-79 disabled">
                            <div>o</div>
                        </div>
                        <div class="key key-80 disabled">
                            <div>p</div>
                        </div>
                        <div class="key key-219 disabled">
                            <div>
                                <span><sub>[</sub><sup>{</sup></span>
                            </div>
                        </div>
                        <div class="key key-221 disabled">
                            <div>
                                <span><sub>]</sub><sup>}</sup></span>
                            </div>
                        </div>
                        <div class="key key-220 disabled">
                            <div>
                                <span><sub>\</sub><sup>|</sup></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="key key-20 disabled">
                            <div>capslock</div>
                        </div>
                        <div class="key key-65 disabled">
                            <div>a</div>
                        </div>
                        <div class="key key-83 disabled">
                            <div>s</div>
                        </div>
                        <div class="key key-68 disabled">
                            <div>d</div>
                        </div>
                        <div class="key key-70 disabled">
                            <div>f</div>
                        </div>
                        <div class="key key-71 disabled">
                            <div>g</div>
                        </div>
                        <div class="key key-72 disabled">
                            <div>h</div>
                        </div>
                        <div class="key key-74 disabled">
                            <div>j</div>
                        </div>
                        <div class="key key-75 disabled">
                            <div>k</div>
                        </div>
                        <div class="key key-76 disabled">
                            <div>l</div>
                        </div>
                        <div class="key key-186 disabled">
                            <div>
                                <span><sub>;</sub><sup>:</sup></span>
                            </div>
                        </div>
                        <div class="key key-222 disabled">
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
                        <div class="key key-lshift key-16 disabled">
                            <div>lshift</div>
                        </div>
                        <div class="key key-90 disabled">
                            <div>z</div>
                        </div>
                        <div class="key key-88 disabled">
                            <div>x</div>
                        </div>
                        <div class="key key-67 disabled">
                            <div>c</div>
                        </div>
                        <div class="key key-86 disabled">
                            <div>v</div>
                        </div>
                        <div class="key key-66 disabled">
                            <div>b</div>
                        </div>
                        <div class="key key-78 disabled">
                            <div>n</div>
                        </div>
                        <div class="key key-77 disabled">
                            <div>m</div>
                        </div>
                        <div class="key key-188 disabled">
                            <div>
                                <span><sub>,</sub><sup>&lt;</sup></span>
                            </div>
                        </div>
                        <div class="key key-190 disabled">
                            <div>
                                <span><sub>.</sub><sup>&gt;</sup></span>
                            </div>
                        </div>
                        <div class="key key-191 disabled">
                            <div>
                                <span><sub>/</sub><sup>?</sup></span>
                            </div>
                        </div>
                        <div class="key key-rshift key-16 disabled">
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
        add_active_key();
        $('.key').removeClass('disabled');
        var current_content = "Lorem Ipsum Is SimpLy 457 679 (oihi)dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.";
        var trim_data = $.trim(current_content);
        var data = trim_data.split('');
        $('#screen_content').append("<span class='characterSpan active_char'>"+data[0]+"</span>");
            for (var i = 1; i <data.length ; i++) {
                
                var charSpan = data[i];
               $('#screen_content').append("<span class='characterSpan'>"+charSpan+"</span>");
            }
             
               
            function add_active_key(){
                var active_span = $('.active_char').text().toUpperCase();
                var keycode_active_span = active_span.charCodeAt();
                var new_code = 'key-'+keycode_active_span;
               
                if($('.key').find(new_code)){
                    if($('.key').find('active_button')){
                        $('.key').removeClass('active_button');
                        $('.'+new_code).addClass('active_button');
                    }
                }
            }
            function check_char(current_spanValue){
               
                var charofActiveSpan = current_spanValue;
                var charCodeofActiveSpan = charofActiveSpan.charCodeAt();
                var  evt =evt || window.event;
                var code_char = event.key;
                var upperCode_char = code_char.toUpperCase();
                var charCodeofEventCode = code_char.charCodeAt();
               
                if(charCodeofEventCode==charCodeofActiveSpan){
                     $('#screen_content .characterSpan.active_char').prev().addClass('validInput');                    
                }else{
                     $('#screen_content .characterSpan.active_char').prev().addClass('invalidInput');
                }
                
            }
            function start_typing(){
                $(document).keydown(function(){
                    var current_span = $('#screen_content .characterSpan.active_char').index();
                    var current_spanValue = $('#screen_content .characterSpan.active_char').html();
                    var  evt =evt || window.event;
                    if (evt.ctrlKey  &&  evt.altKey  &&  evt.key === "e")
                    {
                        alert("key");
                    }
                    else
                    {
                        $(current_span).closest('span').next().find('.characterSpan');
                        $('#screen_content .characterSpan.active_char').next().addClass('active_char');
                        $('#screen_content .characterSpan.active_char').prev().removeClass('active_char');
                       
                        add_active_key();
                        check_char(current_spanValue);
                    }
                    
                });
            }
            $('#start').click(function() {
                $('.overlay').addClass('hide');
                start_typing();
            });
});
</script>