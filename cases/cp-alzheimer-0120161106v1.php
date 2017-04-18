<!doctype html>
<html>
<head>
    <title>CAM Assistant for Simulations - UCM</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Videos, Tags, Comments, PHAT-SIM, Massis, UCM, Complutense"/>
    <script type="application/x-javascript">
        if (navigator.userAgent.indexOf('Firefox') == -1) {
            window.location.href = "error.php"
        }
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <link href="css/font.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet"/>
    <link href="css/videojs.markers.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="css/video-js.css" rel="stylesheet"/>

    <link rel="stylesheet" href="css/bar-controls.css">
    <link rel="stylesheet" href="css/video-js.css">
    <link rel="stylesheet" href="css/videojs.caption.css">
    <link rel="stylesheet" href="css/tipped.css">

    <script src="js/jquery2.0.3.min.js" type="text/javascript"></script>
    <script src="js/bootstrap-slider.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/modernizr.js" type="text/javascript"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
    <script src="js/screenfull.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(function () {
            // $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
            if (!screenfull.enabled) {
                return false;
            }
            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>

    <!-- If you'd like to support IE8 -->
    <!--script src="http://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js" type="text/javascript"></script-->

    <script src="js/video.js" type="text/javascript"></script>
    <script src="js/videojs.caption.js" type="text/javascript"></script>
    <script src="js/skycons.js" type="text/javascript"></script>
    <script src="js/json2.js" type="text/javascript"></script>
    <script src="js/jstorage.js" type="text/javascript"></script>
    <script src="js/util.js" type="text/javascript"></script>

    <!-- Text caption for comment video -->
    <script src="js/json-caption-cp-alzheimer-0120161106v1.js" type="text/javascript"></script>

</head>
<body class="dashboard-page">
    <script type="text/javascript">
        var theme = 'default';
        $('body').removeClass(function (index, css) {
            return (css.match(/\btheme-\S+/g) || []).join(' ');
        });
        if (theme !== 'default') {
            $('body').addClass(theme);
        }
    </script>
    <script type="text/javascript">
        JSOTRAGE = {
            /**
             * insert_value
             * takes data from form fields and stores it with jStorage
             * @return
             */
            insert_value: function(key, val){
                var ttl = Number($('#ttl').val()) || 0;
                $.jStorage.set(key, val);
                if(ttl>0){
                    $.jStorage.setTTL(key, ttl);
                }
                // this.reDraw();
            },
            /**
             * inser caption.
             */
            insert_caption: function (caption) {
                $.jStorage.set("caption_data", JSON.stringify(caption));
            },

            /**
             * get_value
             * alerts a value from jStorage with a key from a form field
             * @return
             */
            get_value: function(key){
                var value = $.jStorage.get(key);
                alert(value);
            },

            get_caption: function () {
                var caption = $.jStorage.get("caption_data");
                if (caption == '' || caption == 'undefined' || caption == null){
                    caption = getDefaultComments();
                    return caption;
                }else{
                    return JSON.parse(caption);
                }
            },

            /**
             * flush_values
             * clears all data
             * @return
             */
            flush_values: function(){
                $.jStorage.flush();
                this.reDraw();
            },

            /**
             * reDraw
             * fills table with data from jStorage
             * @return
             */
            reDraw: function(){
                var row, del, indx=$.jStorage.index(), valuetd;
                $$("tr[class~=rida]").each(function(c){c.remove();});
                for(var i=0; i<indx.length; i++){
                    row = new Element("tr",{className:"rida"});
                    row.insert(new Element("td").update(indx[i]));
                    valuetd = new Element("td").update($.jStorage.get(indx[i]));
                    valuetd.setAttribute("colspan",2);
                    valuetd.colspan = 2;
                    row.insert(valuetd);
                    del = new Element("a",{href:"javascript:void(0)"}).update("DEL");
                    (function(i){
                        del.observe("click", function(){
                            $.jStorage.deleteKey(i);
                            JSOTRAGE.reDraw();
                        });
                    }).call(this,indx[i])
                    row.insert(new Element("td").insert(del));
                    $("tulemused").insert(row);
                }
            }
        }

        $.jStorage.listenKeyChange("test", function(key, action){
            JSOTRAGE.reDraw();
            alert(key+" "+action+" ("+$.jStorage.get(key, "~~")+")");
        });

        var hasFocus = false;
        $.jStorage.subscribe("valchange", function(channel, payload){
            if(window.hasFocus){
                return;
            }
        });
    </script>
    <script type="text/javascript">
        $( function() {
            $( document ).tooltip({
                track: true
            });
        });
    </script>

    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="help.html" class="main-menu-access">
                <i class="icon-proton-logo"></i>
                <i class="icon-reorder"></i>
            </a>
        </nav>
        <section class="title-bar">
            <div class="logo">
                <h1>
                    <a href="cp-alzheimer-0120161106v1.html"><img src="images/ucm-ws.png" alt=""/>CAM ASSISTANT</a>
                </h1>
            </div>
            <div class="full-screen">
                <section class="full-top">
                    <button id="toggle" title="Full Screen">
                        <i class="fa fa-arrows-alt" aria-hidden="true"></i>
                    </button>
                </section>
            </div>
            <div class="w3l_search">
                <a href="help.html"><img src="images/help.png" alt="Help Options" title="Help Options" width="25" height="25"/></a>
                <a href="fast_guide.html"><img src="images/info.png" alt="Fast Guide" title="Fast Guide" width="25" height="25"/></a>
            </div>
            <div class="header-right">
                <div class="profile_details_left">
                    <div class="header-right-left">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </section>
        <div class="main-grid">
            <div class="social grid">
                <div class="grid-info">
                    <div class="col-md-12">
                        <div class="center_element">
                            <input type="hidden" id="videoFile1" maxlength="250" class="tooltip_ video_cam form-control" style="width: 450px;" title="Video 1 file input field"
                                   value="videos/video-alzheimer-CP000001-CAM1-VI01.mp4" readonly="readonly"/>
                            <button type="button" id="buttom_load_video" class="btn btn-md btn-primary" style="width: 120px" title="Load Video">Show Videos</button>
                        </div>
                        <div title="Error message area" id="errorMsg" style="color:Red;">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="grid-info">
                    <div class="col-md-12">
                        <div id="buttonbar" class="container-fluid" style="display: none; font-size:larger;" role="group">
                            <div class="row">
                                <form class="form-inline" role="form">
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="restart" class="btn btn-md btn-primary" style="width: 60px" title="Reload Video">
                                            <img src="images/refresh.png" height="22" width="22" alt="[]" title="Reload Video" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="rew" class="btn btn-md btn-primary" style="width: 60px" title="Rewind Video">
                                            <img src="images/rewing.png" height="22" width="22" alt="&lt;&lt;" title="Rewind Video" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="play" class="btn btn-md btn-primary" style="width: 60px" title="Play Video">
                                            <img src="images/play-button.png" height="22" width="22" alt="&gt;" title="Play Video" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="fwd" class="btn btn-md btn-primary" style="width: 60px" title="Forward Video">
                                            <img src="images/forward.png" height="22" width="22" alt="&gt;&gt;" title="Forward Video" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <label for="slower">Rate Video: </label>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="slower" title="Slower playback" class="btn btn-md btn-primary"
                                                style="width: 60px">
                                            <img alt="-" src="images/minus.png" height="22" width="22" title="Slower playback" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="faster"  class="btn btn-md btn-primary" style="width: 60px" title="Faster playback">
                                            <img alt="+" src="images/plus.png" height="22" width="22" title="Faster playback" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="normal" class="btn btn-md btn-primary" style="width: 60px" title="Reset playback rate">
                                            <img alt="-" src="images/refresh.png" height="22" width="22" title="Reset playback rate" class="tooltip_"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <label for="volDn">Volume: </label>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="volDn" class="btn btn-md btn-primary" style="width: 60px" title="Volume Down">
                                            <img alt="-" src="images/minus.png" height="22" width="22" title="Volume Down"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="volUp" class="btn btn-md btn-primary" style="width: 60px" title="Volume Up">
                                            <img alt="+" src="images/plus.png" height="22" width="22" title="Volume Up"/>
                                        </button>
                                    </div>
                                    <div class = "form-group col-xs-4 col-sm-1">
                                        <button type="button" id="mute" title="On/Off Audio Video" class="btn btn-md btn-primary"
                                                style="width: 60px">
                                            <img alt="On/Off" src="images/volume-off.png" title="On/Off Audio Video" height="22" width="22"/>
                                        </button>
                                    </div>
                                    <div class="clearfix visible-xs"></div>
                                </form>
                            </div>
                            <div class="row">
                                <div style="position:relative; margin:auto; width:90%">
                                    <span style="position:absolute; color:gray; min-width:100px;">
                                        <span id="value_range"></span>
                                    </span>
                                    <input id="current_time_video_bar" name="current_time_video_bar" type="range" min="0" max="100" step="0.01" value="0" title="Current Time 0.00"/>
                                </div>
                            </div>
                            <div class="row">
                                <form class="form-inline" role="form">
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        Length (seconds): <span class="text-video" id="vLen"></span>
                                    </div>
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        Current time: <span class="text-video" id="curTime" title="Current time"></span>
                                    </div>
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        Remaining time: <span class="text-video" id="vRemaining" title="Remaining time"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <form class="form-inline" role="form">
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        <div class="image-upload">
                                            <label for="file-comment">Load Comments
                                                <img src="images/subtitle_load_4.png" title="Load Comment your local drive"height="32" width="32" alt="Load Comment JSON"/></label>
                                            <input id="file-comment" name="file-comment" type="file"/>
                                        </div>
                                    </div>
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        <label for="bottom-export-json">Export Comment <img id="bottom-export-json" alt="Export Comment JSON" src="images/img-json-alt.png" title="Export Comment to local drive" height="32" width="32" class="tooltip_"/></label>
                                        <input id="filename" disabled="disabled" size="20" maxlength="20" type="hidden" placeholder="Please enter filename for Comments" value="comment-video.json"/>
                                        <a id="download" download="" href=""></a>
                                    </div>
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        <label for="bottom-save-comment">Send Comment <img id="bottom-save-comment" alt="Send Comment" src="images/img-send-data-2.png" title="Send Comment" height="32" width="32" class="tooltip_"/></label>
                                    </div>
                                    <div class = "form-group col-xs-6 col-sm-4">
                                        <img src="images/img-check-ok.png" id="save-comment-img-ok" width="32" height="32" style="display: none;" title="Comment Save"/>
                                        <img src="images/img-check-err.png" id="save-comment-img-err" width="32" height="32" style="display: none;" title="Comment NOT Save. Please send your comment as JSON file for email."/>
                                        <input type="hidden" id="identifier" name="identifier" />
                                        <input type="hidden" id="url_identifier" name="url_identifier" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="form-cam" class="agile-bottom-grids" style="display: none;">
                <div class="col-md-2"></div>
                <div class="col-md-8 agile-bottom-right">
                    <div class="agile-bottom-grid">
                        <iframe name="hidden_iframe" id="hidden_iframe" style="display:none;"></iframe>
                        <form data-toggle="validator" action="https://docs.google.com/macros/exec?service=AKfycbwlJPs3FdUvsT73pzavO08CF-98rTLK0NA2GRQboU6AHBD6NjXD"  method="POST" role="form" name="theForm" id="theForm" target="hidden_iframe">
                            <input type="hidden" name="form-type" value="contact">
                            <fieldset class="row">
                                <label>
                                    <input required type="text" id="name" name="name" placeholder="Nombre:*" data-constraints="@LettersOnly @NotEmpty"
                                    title="Indique su Nombre"/>
                                    <div class="help-block with-errors"></div>
                                </label>
                                <label>
                                    <input type="text" id="email" name="email" placeholder="Email:" data-constraints="@Email @NotEmpty" title="Indique su Email"/>
                                    <div class="help-block with-errors"></div>
                                </label>
                                <label>
                                    <select id="type_stude" name="type_stude" required>
                                        <option value="">Tu formación es...</option>
                                        <option value="BA">Bachillerato</option>
                                        <option value="CU">Carrera Universitaria</option>
                                        <option value="CS">Curso y/o Seminario</option>
                                        <option value="DR">Doctorado</option>
                                        <option value="FP">Formación profesional</option>
                                        <option value="MP">Másters y/o Posgrados</option>
                                        <option value="OE">Otros Estudios</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </label>
                                <label>
                                    <select id="considerate" name="considerate" required>
                                        <option value="">Te parece interesante...</option>
                                        <option value="S">Si, es interesante</option>
                                        <option value="N">No, no lo veo relevante</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </label>
                                <label>
                                    <input type="hidden" id="identifier_view" name="identifier_view" />
                                </label>
                                <label>
                                    <input required type="text" id="control" name="control" placeholder="4 dígitos:*" data-constraints="@Number"
                                    title="Para prevenir el spam, por favor indique cualquier número de 4 dígitos" size="8" maxlength="20"/>
                                    <img src="images/img-question-gif.png" width="22" height="22" title="Para prevenir el spam, por favor indique cualquier número de 4 dígitos"/>
                                    <div class="help-block with-errors"></div>
                                </label>
                                <label>
                                    <button type="button" id="send-send" name="send-send" class="btn btn-md btn-primary">Enviar</button>
                                    <input type="hidden" id="identifier_data" name="identifier_data" />
                                    <input type="hidden" id="url_identifier_data" name="url_identifier_data" />
                                    <input type="hidden" id="json-str" name="json-str" />
                                    <input type="hidden" id="form_id_cp" name="form_id_cp" />
                                    <input type="hidden" id="form_id_cam" name="form_id_cam" />
                                    <input type="hidden" id="name_videos" name="name_videos" />
                                </label>
                                <label>
                                    <button type="button" id="send-cancel" name="send-cancel"  class="btn btn-md btn-primary">Cancelar</button>
                                </label>
                                <label><span id="success"></span></label>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="clearfix"></div>
            </div>
            <div class="agile-bottom-grids">
                <div class="col-md-2"></div>
                <div class="col-md-8 agile-bottom-right">
                    <div class="agile-bottom-grid">
                        <!--div class="area-grids-heading heading-video">
                            <h3 class="active"><a data-toggle="collapse" href="#graph-1">Camera 1</a></h3>
                        </div-->
                        <div class="area-grids-heading heading-video">
                            <div id="cam-title" class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Descripción del caso de estudio</h3>
                                </div>
                                <div class="panel-body">
                                    En esta simulación se estudia un síntoma muy común en personas con Alzheimer como es el caso de no poder.
                                </div>
                                <input type="hidden" id="id_cp" name="id_cp" value="CAMASSISTANT-CP000001" />
                                <input type="hidden" id="id_cam" name="id_cam" value="CP000001-CAM1-VI01-20161015" class="id_cams"/>
                            </div>
                            <br/>
                        </div>
                        <div id="graph-1" class="video-js-responsive-container vjs-hd">
                            <video id="Video1" preload="auto" class="video-js vjs-default-skin" style="border: 1px solid green;"
				   width="auto" height="auto"
                                   data-setup="{{'fluid': true}}"
                                   title="Case Practical Comment Video"
                                   poster="images/fondo_viedeos.png" >
                                HTML5 Video is required for this example
                            </video>
                        </div>
                        <div class="area-grids-heading">
                            <div id="demo-tools-1" style="display: none;">
                                <h3 class="demo-box-title active panel-title">
                                    <a data-toggle="collapse" href="#collapse1"><span class="expand-tools">[+]</span> Tools Comments Video - Camera 1 </a>
                                </h3>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="demo-box">
                                        <ul class="demo-tool-buttons" id="tools_1">
                                            <li id="none2-tag-01" class="">
                                                <img id="play-min" name="play-min" src="images/play-button.png" height="22" width="22" alt="&gt;" title="Play Video" class="tooltip_"/>
                                            </li>
                                            <li id="none1-tag-01" class="">
                                                <img id="restart-min" src="images/previous.png" height="22" width="22" alt="[]" title="Reload Video" class="tooltip_"/>
                                            </li>
                                            <li id="none1-tag-1" class="">
                                                <img id="rew-min" src="images/rewing.png" height="22" width="22" alt="&gt;&gt;" title="Rewing Video" class="tooltip_"/>
                                            </li>
                                            <li id="none3-tag-01" class="">
                                                <img id="fwd-min" src="images/forward.png" height="22" width="22" alt="&gt;&gt;" title="Forward Video" class="tooltip_"/>
                                            </li>
                                            <li id="increase-font-1" class="increase-font">
                                                <img src="images/font_inc.png" width="22" height="22" alt="Zoom in Comments" title="Zoom in Comments" class="tooltip_"/>
                                            </li>
                                            <li id="decrease-font-1" class="decrease-font">
                                                <img src="images/font_dec.png" width="22" height="22" alt="Zoom out Comments" title="Zoom out Comments" class="tooltip_"/>
                                            </li>
                                            <li id="none2-tag-1" class=""></li>
                                            <li id="none3-tag-1" class=""></li>
                                            <li id="none4-tag-1" class=""></li>
                                            <li>
                                                Current: <span class="text-video" id="curTime-tools" title="Current time"></span>
                                            </li>
                                            <li id="add-tag-1" class="dynamic-demo-add-tag" style="align-self: flex-end;">
                                                <img src="images/img_add_st_a.png" title="Add Comment" alt="Add Comment" class="tooltip_"/>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="demo-box" role="group" aria-label="...">
                                        <input type="hidden" id="ct_1" name="ct_1" />
                                        <label for="bottom_text_tag_1">Short Comment:*</label>
                                        <input type="text" id="bottom_text_tag_1" name="bottom_text_tag_1" class="form-control" disabled="disabled" value="" maxlength="50" required placeholder="Short Comment visible in Video"/><br/>
                                        <label for="text_tag_1">Long Comment:&nbsp;</label>
                                        <textarea id="text_tag_1" name="text_tag_1" rows="3" class="form-control" disabled="disabled" style="resize: none;" placeholder="Long Comment of camera, not visible in video"></textarea><br/>
                                    </div>
                                    <div class="demo-box" role="group" aria-label="...">
                                        <label for="textOver_1">Options Short Comment:&nbsp;</label>
                                        <div class="checkbox" id="buttom_1">
                                            <label>
                                                <input id="dynamic-demo-bold-1" name="dynamic-demo-bold-1" type="checkbox">
                                                <img src="images/bold.png" class="button-edit tooltip_" width="22" height="22" title="Bold Text" alt="Bold"/>
                                            </label>&nbsp;
                                            <label>
                                                <input id="dynamic-demo-italy-1" name="dynamic-demo-italy-1" type="checkbox">
                                                <img src="images/italic.png" class="button-edit tooltip_" width="22" height="22" title="Italy Text" alt="Italy"/>
                                            </label>&nbsp;
                                            <label>
                                                <input id="dynamic-dynamic-demo-underline-1" name="dynamic-demo-underline-1" type="checkbox">
                                                <img src="images/underline.png" class="button-edit tooltip_" width="22" height="22" title="Underline Text" alt="Underline"/>
                                            </label>&nbsp;
                                            <label>
                                                <input id="dynamic-dynamic-demo-left-1" name="dynamic-demo-left-1" type="checkbox">
                                                <img src="images/left.png" class="button-edit tooltip_" width="22" height="22" title="Left Text" alt="Left"/>
                                            </label>&nbsp;
                                            <label>
                                                <input id="dynamic-dynamic-demo-center-1" name="dynamic-demo-center-1" type="checkbox">
                                                <img src="images/center.png" class="button-edit tooltip_" width="22" height="22" title="Center Text" alt="Center"/>
                                            </label>&nbsp;&nbsp;
                                            <img src="images/save.png" class="dynamic-demo-add button-edit tooltip_" width="22" height="22" title="Save" alt="Save"/>
                                            &nbsp;&nbsp;
                                            <img src="images/cancel.png" class="dynamic-demo-cancel button-edit tooltip_" width="22" height="22" title="Cancel Edition Tag" alt="Cancel"/>
                                        </div>
                                        <input type="hidden" id="textOver_1" name="textOver_1" />
                                        <input type="hidden" id="id_1" name="id_1" />
                                        <input type="hidden" id="ed_1" name="ed_1" value="N" />
                                    </div>
                                    <div class="demo-box" >
                                        <ul id='marker-list-1' class="dynamic-demo-events list-group tag-list">
                                        </ul>
                                    </div>
                                    <div id="text-controls_1" class="demo-edit-buttons">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- footer -->
        <div class="footer">
            <p>© 2016 <a href="http://grasia.fdi.ucm.es/colosaal/" target="_blank">ColosAAL</a> - <a href="http://ucm.es" target="_blank">Universidad Complutense de Madrid</a></p>
        </div>
        <!-- //footer -->
    </section>
</body>
<script type="text/javascript">

    /**
     *  Function set message.
     */
    function messageSave(mess, data) {
        if (mess == "ok"){
            $("#save-comment-img-ok").show("swing");
            $("#save-comment-img-err").hide("linear");
            setTimeout("document.getElementById('save-comment-img-ok').style.display = 'none';", 5000);
            $("#send-comment").show("swing");
            $("#form-cam").show("swing");
            $("#control").val('');
            $("#identifier_view").val($("#identifier").val());
        }else {
            if (mess == "err"){
                $("#save-comment-img-err").show("swing");
                $("#save-comment-img-ok").hide("linear");
                $("#send-comment").hide("linear");
                $("#form-cam").hide("linear");
                setTimeout("document.getElementById('save-comment-img-err').style.display = 'none';", 5000);
            }else{
                $("#save-comment-img-ok").hide("linear");
                $("#save-comment-img-err").hide("linear");
                $("#send-comment").hide("linear");
                $("#form-cam").hide("linear");
            }
        }
    }

    function insertComment(data_comment){
        $.ajax({
            url: "https://api.myjson.com/bins",
            type: "POST",
            data: data_comment,
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function (data, textStatus, jqXHR) {
                $("#identifier").val(data.uri.split("/")[4]);
                $("#identifier_view").val(data.uri.split("/")[4]);
                $("#url_identifier").val(data.uri);
                messageSave("ok", data);
            }
        });
    }

    function updateComment(data_comment, id){
        if (id != ""){
            $.ajax({
                url:"https://api.myjson.com/bins/" + id,
                type:"PUT",
                data:data_comment,
                contentType:"application/json; charset=utf-8",
                dataType:"json",
                success: function(data, textStatus, jqXHR){
                    messageSave("ok", null);
                }
            });
        }
    }

    function getDataFormComment(){
        var name = $("#name").val();
        var email = $("#email").val();
        var identifier = $("#identifier").val();
        var control = $("#control").val();
        var url = $("#url_identifier").val();
        var considerate = $("#considerate").val();
        var type_stude = $("#type_stude").val();

        if (name != "" && identifier != "" && url != "" && considerate != "" && type_stude != "") {
            if (isNumeric(document.getElementById("control"), "¡Indique un valor númerico!")) {
                $("#url_identifier_data").val(url);
                $("#identifier_data").val(identifier);
                $("#json-str").val(JSON.stringify(caption_data));
                $("#form_id_cp").val($("#id_cp").val());

                var name_videos = "";
                var id_cams = "";
                $('.video_cam').each(function(){
                    name_videos += $(this).val() + ";";
                });
                $('.id_cams').each(function(){
                    id_cams += $(this).val() + ";";
                });
                $("#name_videos").val(name_videos);
                $("#form_id_cam").val(id_cams);

                document.getElementById('theForm').submit();
                document.getElementById('success').innerHTML = 'Enviado.';
                setTimeout("document.getElementById('form-cam').style.display = 'none';", 5000);
            }
        }else{
            alert("¡Indique todos los campos obligatorios!");
        }
    }

    var caption_data = JSOTRAGE.get_caption();
    var video1 = document.getElementById("Video1");

    var video_1 = videojs('Video1', { responsive: true });

    var json;

    $(function () {

        var vLength;
        $("#current_time_video_bar").val('0');

        $("#bottom-export-json").on("click", function (e) {
            var dataJson = "data:text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(caption_data));
            var downlink = document.getElementById('download');
            var filename = $("#filename").val() || "comment-video.json";
            downlink.setAttribute("href", dataJson);
            downlink.setAttribute("download", filename);
            downlink.click();
        });

        $("#bottom-save-comment").click(function () {
            document.getElementById('success').innerHTML='';
            if (confirm("¿Esta seguro que desea enviar todos sus comentarios al equipo de desarrollo?")){
                var ident_ = $("#identifier").val();
                var data_comment = JSON.stringify(caption_data);
                if (ident_ == ""){
                    insertComment(data_comment);
                }else{
                    updateComment(data_comment, ident_)
                }
            }
        });

        $("#send-cancel").click(function () {
            $("#form-cam").toggle();
        });

        $("#send-send").click(function () {
            getDataFormComment();
        });

        if (video1.canPlayType) {

            $("#play").click(function(){
                loadVideos();
            });

            $("#play-min").click(function(){
                loadVideos();
            });

            $("#restart").click(function(){
                setTime(0);
            });

            $("#restart-min").click(function(){
                setTime(0);
            });

            $("#rew-min").click(function(){
                setTime(-5);
            });

            $("#rew").click(function(){
                setTime(-5);
            });

            $("#fwd-min").click(function(){
                setTime(5);
            });

            $("#fwd").click(function(){
                setTime(5);
            });

            $("#current_time_video_bar").change(function () {
                var ct = parseFloat($(this).val()).toFixed(1);
                $(this).attr('title', "Current Time " + ct);
                setTimeBar(ct);
            });

            $("#volDn").click(function(){
                setVol(-.1);
            });

            $("#volUp").click(function(){
                setVol(.1);
            });

            $("#buttom_load_video").click(function(){
                caption_data = JSOTRAGE.get_caption();
                getVideo();
            });

            $("#slower").click(function(){
                video1.playbackRate -= .25;
            });

            $("#faster").click(function(){
                video1.playbackRate += .25;
            });

            $("#normal").click(function(){
                video1.playbackRate = 1;
            });

            $("#mute").click(function(){
                video1.muted = !video1.muted;
            });

            video1.addEventListener("timeupdate", function () {
                var vTime = video1.currentTime;
                document.getElementById("curTime").textContent = vTime.toFixed(1);
                document.getElementById("curTime-tools").textContent = vTime.toFixed(1);
                document.getElementById("vRemaining").textContent = (vLength - vTime).toFixed(1);
                $("#current_time_video_bar").val(vTime);
                $("#current_time_video_bar").attr('title', "Current Time " + vTime);
            }, false);

            video1.addEventListener("pause", function () {
                document.getElementById("play").innerHTML = "<img alt='&gl;' title='Play' src='images/play-button.png' height='22' width='22'/>";
                document.getElementById("play-min").src = "images/play-button.png";
            }, false);

            video1.addEventListener("playing", function () {
                document.getElementById("play").innerHTML = "<img alt='||' title='Pause' src='images/pause.png' height='22' width='22'/>";
                document.getElementById("play-min").src = "images/pause.png";
            }, false);

            video1.addEventListener("volumechange", function () {
                if (video1.muted) {
                    document.getElementById("mute").innerHTML = "<img alt='Off' src='images/volume-off.png' height='22' width='22'/>"
                } else {
                    document.getElementById("mute").innerHTML = "<img alt='On' src='images/high-volume.png' height='22' width='22'/>"
                }
            }, false);

            video1.addEventListener("canplay", function () {
                document.getElementById("buttonbar").style.display = "block";
                document.getElementById("demo-tools-1").style.display = "block";
            }, false);

            video1.addEventListener("loadedmetadata", function () {
                vLength = video1.duration.toFixed(1);
                document.getElementById("vLen").textContent = vLength;
                $("#current_time_video_bar").attr('max', vLength);
            }, false);

            video1.addEventListener("error", function (err) {
                errMessage(err);
            }, true);

        } else {
            errMessage("HTML5 Video is required for this example");
        }

        /**
         * Function load Videos.
         */
        function loadVideos(evt) {
            if (video1.src == "") {
                getVideo();
            }
            if (video1.paused) {
                playVideos();
                document.getElementById("play").innerHTML = "<img alt='||' title='Pause' src='images/pause.png' height='22' width='22'/>";
                document.getElementById("play-min").src = "images/pause.png";
            } else {
                pauseVideos();
                document.getElementById("play").innerHTML = "<img alt='&gl;' title='Play' src='images/play-button.png' height='22' width='22'/>";
                document.getElementById("play-min").src = "images/play-button.png";
            }
        }

        /**
         * Function get url for video.
         */
        function getVideo() {
            var fileURL1 = document.getElementById("videoFile1").value;

            if (fileURL1 != "") {
                video1.src = fileURL1;
                video1.load();
                document.getElementById("buttonbar").style.display = "block";
                document.getElementById("play").innerHTML = "<img alt='&gl;' title='Play' src='images/play-button.png' height='22' width='22'/>";
                document.getElementById("play-min").src = "images/play-button.png";
                loadSubtitle();
                paintListAll();
            } else {
                errMessage("Enter a valid video URL for video and file for comments tags");
            }
        }

        /**
         * Function Set Time for all videos.
         */
        function setTime(tValue) {
            try {
                if (tValue == 0) {
                    video1.currentTime = tValue;
                } else {
                    video1.currentTime += tValue;
                }
            } catch (err) {
                errMessage("Video content might not be loaded");
            }
        }

        /**
         * Function Set Time for all videos.
         */
        function setTimeBar(tValue) {
            try {
                video1.currentTime = tValue;
            } catch (err) {
                errMessage("Video content might not be loaded");
            }
        }

        /**
         * Function Set Volumen for all videos.
         */
        function setVol(value) {
            var vol = video1.volume;
            vol += value;
            if (vol >= 0 && vol <= 1) {
                video1.volume = vol;
            } else {
                video1.volume = (vol < 0) ? 0 : 1;
            }
        }

        /**
         * Function Show error msg for all videos.
         */
        function errMessage(msg) {
            document.getElementById("errorMsg").textContent = msg;
            setTimeout("document.getElementById('errorMsg').textContent=''", 10000);
        }

        /**
         * Function Modify Information of Tags for all videos.
         */
        function modInfoTag(id, title, bottom, text, caption) {
            for (var i=0; i < caption.length; i++) {
                if (caption[i].id == id) {
                    caption[i].text = title;
                    caption[i].data = bottom;
                    caption[i].comment = text;
                    caption[i].overlayText = title;
                    break;
                }
            }
            return true;
        }

        /**
         * Function loadSubtitle.
         */
        function loadSubtitle() {
            try {
                // Control for video 1
                video_1.caption({
                    data: caption_data["cam-1"].rows, setting: {
                        onCaptionChange: function (num_c) {
                            console.log("Show 1: " + num_c + " caption");
                        }
                    }
                });

                updateCaptions();
            } catch(err) {
                console.log("No refresh object videos: " + err)
            }

        }

        /**
         * Function get cam video.
         */
        function getCamVideo(cam){
            var video = '';
            switch(parseInt(cam)) {
                case 1:
                    video = video_1;
                    break;
            }
            return video;
        }

        /**
         * Function get cam video.
         */
        function getCaption(cam){
            var cam_index = "cam-" + cam;
            var caption = caption_data[cam_index];
            return caption;
        }

        /**
         * Function move tags 1 seconds.
         */
        function shiftTags(cam, increment){
            var data = getCamVideo(cam).caption.getCaptionData();
            for (var i = 0; i < data.length; i++) {
                var startTime = data[i].startTime;
                if (startTime >= 0){
                    startTime += increment;
                    if (startTime < 0) {
                        data[i].startTime = 0;
                        data[i].endTime = 2000;
                        errMessage('You can not move the tag on the video ' + cam);
                    } else {
                        data[i].startTime += increment;
                        data[i].endTime += increment;
                        errMessage('Move the tag 1 seconds on the video ' + cam);
                    }
                } else {
                    errMessage('You can not move the tag on the video ' + cam);
                }
            }
            updateCaptions();
        }

        $(".dynamic-demo-add").click(function () {
            pauseVideos();
            var id_ = $(this).parent().attr('id');
            var cam = id_.slice(-1);
            var ct_el = $("#ct_" + cam);
            var currentTime = parseFloat(ct_el.val());
            currentTime = currentTime.toFixed(2)
            var tag_input = $("#bottom_text_tag_" + cam);
            var text_input = $("#text_tag_" + cam);
            var ed_sn = $("#ed_" + cam);
            var bottom = tag_input.val();
            var text = text_input.val();
            var title = '';
            var sn = ed_sn.val();
            var id_input = $("#id_" + cam);

            if (currentTime != '' && bottom != '') {
                var id = parseInt(id_input.val());
                if (sn == 'S') {
                    // update caption and markers
                    var cam_index = "cam-" + cam;
                    modInfoTag(id, title, bottom, text, caption_data[cam_index].rows);
                } else {
                    id_input.val('');
                    var ctempa = {};
                    var caption_ = getCaption(cam);
                    var num_tags = caption_.rows.length;
                    num_tags += 1;
                    var tm = currentTime * 1000;
                    ctempa.startTime = tm;     // time in miliseconds
                    ctempa.endTime = tm + 2000;
                    ctempa.position = "HB";
                    ctempa.data = bottom;
                    ctempa.alignment = "C";
                    ctempa.comment = text;
                    ctempa.id = num_tags;
                    ctempa.text = title;
                    ctempa.time = currentTime;

                    caption_.rows.push(ctempa);
                    caption_.total = num_tags.toString();
                    caption_.records = num_tags.toString();
                }
                //updateMarkers();
                orderTag(cam);
                updateCaptions();
                paintListAll();

                tag_input.val('');
                text_input.val('');
                $("#textOver_" + cam).val('');
                ed_sn.val('N');
            } else {
                alert("Please, play Video and enter the tag information for Video Camera " + cam);
            }
            tag_input.attr('disabled', 'disabled');
            text_input.attr('disabled', 'disabled');
            ed_sn.val('N');
            ct_el.val('');
            JSOTRAGE.insert_caption(caption_data);
            //playVideos();
        });

        $(".dynamic-demo-cancel").click(function () {
            var id_ = $(this).parent().attr('id');
            cancelEdit(id_.slice(-1));
        })

        $(".dynamic-demo-add-tag").click(function () {
            pauseVideos();
            var id_ = $(this).parent().attr('id');
            var cam = id_.slice(-1);
            var ct = parseFloat(getCamVideo(cam).currentTime()).toFixed(2);
            var text_input = $("#bottom_text_tag_" + cam);
            text_input.prop('disabled', false);
            text_input.focus();
            $("#text_tag_" + cam).prop('disabled', false);
            $("#ct_" + cam).val(ct);

        });

        $(".increase-font").click(function () {
            var id_ = $(this).parent().attr('id');
            getCamVideo(id_.slice(-1)).caption.increaseFontSize();
        });

        $(".decrease-font").click(function () {
            var id_ = $(this).parent().attr('id');
            getCamVideo(id_.slice(-1)).caption.decreaseFontSize();
        });

        $(".dynamic-demo-shift-r").click(function () {
            var id_ = $(this).parent().attr('id');
            shiftTags(id_.slice(-1), 1000)
        });

        $(".dynamic-demo-shift-l").click(function () {
            var id_ = $(this).parent().attr('id');
            shiftTags(id_.slice(-1), -1000)
        });

        /**
         * Functoin paint list in Web.
         * @param cam
         * @param caption
         */
        function paintList(cam, caption) {
            // insert marker list
            $("#marker-list-" + cam).empty();
            for (var i = 0; i < caption.length; i++) {
                var item = '';
                if (caption[i].data != '') {
                    item = $("<li class='list-group-item' style='padding: 1px 1px;' data-index='" + i +
                            "' ><b>" +
                            "<input type='hidden' id='current_time_" + cam + i +  "' name='current_time_" + cam + i + "' value='" + caption[i].time + "' />" +
                            "<input type='hidden' id='ed_" + cam + i + "' name='ed_" + cam + i + "' value='S' />" +
                            "<input type='hidden' id='id_" + cam + i + "' name='id_" + cam + i + "' value='" + caption[i].id + "' />" +
                            "<input type='text' disabled='disabled' maxlength='70' style='width: 85%;' name='tag_text_save_" + cam + i + "' id='tag_text_save_" + cam + i + "' value='Time: " + caption[i].time  + " seg. - Comment: " + caption[i].data + "' class='tooltip_ ' title='" + caption[i].comment + "'/></b> "  +
                            "<img src='images/preview.png' class='li-prev tooltip_' width='18' height='18' alt='Preview' title='Preview Comment on Video' id='goto_tag_" + i +
                            cam + "' onclick='javascript: goTag(" + cam + ", " + i + ");'/> " +
                            "<img src='images/rename.png' class='li-rename tooltip_' width='18' height='18' alt='Edit' title='Edit Comment Text' id='edit_tag_" + i +
                            cam + "' onclick='javascript: editTag(" + cam + ", " + i + ");'/> " +
                            "</li>");
                    // $("#marker-list-" + cam).append(item);
                } else{
                    item = $("<li class='list-group-item' style='padding: 1px 1px;display: none;' data-index='" + i + "' ></li>");
                }
                $("#marker-list-" + cam).append(item);
            }

            $("#marker-list-" + cam).append("<script type='text/javascript'>$( document ).tooltip({ track: true });<\/script>");
            //$("#marker-list-" + cam).append("<script>$(function(){ Tipped.create('.tooltip_', {skin: 'gray', position: 'rightmiddle'} ); });<\/script>");
        }

        // paintListAll();

        /**
         * Function Paint All list on video.
         */
        function paintListAll(){
            try {
                paintList(1, caption_data["cam-1"].rows);
            } catch(err) {
                console.log("No paint list comment for videos: " + err)
            }
        }

    });

    /**
     * Function Pause All videos
     */
    function pauseVideos(){
        video1.pause();
    }

    /**
     * Function Play All videos
     */
    function playVideos(){
        video1.play();
    }

    /**
     * Function Go Tags index preview.
     * @param cam
     * @param index_tag
     */
    function goTag(cam, index_tag){
        pauseVideos();
        setCurrentPositionCaption(cam, index_tag);
        //playVideos();
    }

    /**
     * Set Currents position caption for all videos.
     */
    function setCurrentPositionCaption(cam, index_tag){
        var cam_index = "cam-" + cam;
        var ct = caption_data[cam_index].rows[index_tag].time;
        video_1.currentTime(ct);
    }

    /**
     * Update Captions all videos.
     *
     */
    function updateCaptions(){
        video_1.caption.updateCaption();
    }

    /**
     * Function Edit Text in Tag.
     * @param cam
     * @param index_tag
     */
    function editTag(cam, index_tag){
        pauseVideos();
        setCurrentPositionCaption(cam, index_tag);
        var cam_index = "cam-" + cam;

        var text = caption_data[cam_index].rows[index_tag].text;
        var bottom = caption_data[cam_index].rows[index_tag].data;
        var comment = caption_data[cam_index].rows[index_tag].comment;
        var id = caption_data[cam_index].rows[index_tag].id;

        var tag_input = $("#bottom_text_tag_" + cam);
        var text_input = $("#text_tag_" + cam);

        $("#top_text_tag_" + cam).val(text);
        tag_input.val(bottom);
        text_input.val(comment);
        tag_input.prop('disabled', false);
        text_input.prop('disabled', false);
        $("#textOver_" + cam).val(text);
        $("#id_" + cam).val(id);
        $("#ed_" + cam).val('S');
    }

    /**
     * Function Cancel Edition on Tag.
     * @param cam
     */
    function cancelEdit(cam){
        var tag_input = $("#bottom_text_tag_" + cam);
        var text_input = $("#text_tag_" + cam);
        $("#top_text_tag_" + cam).val('');
        tag_input.val('');
        text_input.val('');
        $("#id_" + cam).val('');
        $("#ed_" + cam).val('N');
        $("#textOver_" + cam).val('');
        tag_input.attr('disabled', 'disabled');
        text_input.attr('disabled', 'disabled');
        $("#ct_" + cam).val('');
    }

    function orderTag(cam){
        caption_data["cam-" + cam].rows.sort(function(a,b){
            if(a.startTime == b.startTime)
                return 0;
            if(a.startTime < b.startTime)
                return -1;
            if(a.startTime > b.startTime)
                return 1;
        });
    }

    /**
     * Function handleFileSelect.
     * @param evt
     */
    function handleFileSelect(evt) {
        var files = evt.target.files;
        var msg = "This action will delete comments that you may have stored in your browser session.\n Do you wish to continue??";
        if ( files[0].type == "text/json" ){
            if(confirm(msg)) {
                $("#current_time_video_bar").val('0');
                for (var i = 0, f; f = files[i]; i++) {
                    var reader = new FileReader();
                    reader.onload = (function (theFile) {
                        return function (e) {
                            console.log('e read As Text = ', e);
                            console.log('e read As Text target = ', e.target);
                            try {
                                caption_data = JSON.parse(e.target.result);
                                JSOTRAGE.insert_caption(caption_data);
                                if (Object.keys(caption_data).length == 4) {
                                    getVideo();
                                    errMessage('The comments have been updated correctly.');
                                } else {
                                    errMessage("You can not update the comments. Please check the file contents used.");
                                }
                            } catch (ex) {
                                alert('Error while trying to read the JSON file, ' + ex);
                            }
                        }
                    })(f);
                    reader.readAsText(f);
                }
            }
        } else {
            alert('The file must be formatted JSON comments.');
        }
    }

    document.getElementById('file-comment').addEventListener('change', handleFileSelect, false);
</script>
</html>
