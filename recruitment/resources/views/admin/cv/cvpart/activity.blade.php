<section id="section_activity">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">ACTIVITY</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_act" id="num_act" value="0" />
            <a class="btn btn-success insert-row" href="javascript:void(0)" onclick="newRowAct()">Thêm</a>
        </div>
    </div>
    <div id="new_row_act">
        <div id="new_row_act_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" href="javascript:void(0)" id="0" onclick="deleteRowAct(this.id)"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <div class="row">
                        <div class="col-xs-5">
                            <input type="text" id="act_start_date_0" name="act_start_date_0" class="datepicker1 date-education" placeholder="click choose date">
                        </div>
                        <div class="col-xs-2">
                            <label>to</label>
                        </div>
                        <div class="col-xs-5">
                            <input type="text" id="act_end_date_0" name="act_end_date_0" class="datepicker1 date-education" placeholder="click choose date">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="text" class="form-control" id="activity_name_0" name="activity_name_0" placeholder="Activity name">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Position</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="act_position_0" name="act_position_0" placeholder="Position">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Description</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <textarea class="form-control tinymce-small" id="act_description_0" name="act_description_0" placeholder="Description" rows="4"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
     //insert and delete activity
    act=0;
    function newRowAct(){
        // alert('hello');
        act++;
        num = $("#num_act").val();
        tem = parseInt(num) + 1;
        $("#num_act").val(tem);
        html='<div id="new_row_act_'+act+'">'
                    +'<div class="row">'
                       +' <div class="col-xs-12 col-sm-12 col-md-12">'
                           +' <a class="delete-row" href="javascript:void(0)" id="'+act+'" name="'+act+'" onclick="deleteRowAct(this.id)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row">'
                        +'<div class="col-xs-6 col-lg-4">'
                           +' <div class="row">'
                               +' <div class="col-xs-5">'
                                    +'<input type="text" id="act_start_date_'+act+'" name="act_start_date_'+act+'" class="datepicker_act_'+act+' date-education" placeholder="click choose date">'
                                +'</div>'
                                +'<div class="col-xs-2">'
                                    +'<label>to</label>'
                               +' </div>'
                               +' <div class="col-xs-5">'
                                   +' <input type="text" id="act_end_date_'+act+'" name="act_end_date_'+act+'" class="datepicker_act_'+act+' date-education" placeholder="click choose date">'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<div class="row">'
                                +'<div class="col-xs-12 col-sm-12 col-md-12">'
                                    +'<input type="text" class="form-control" id="activity_name_'+act+'" name="activity_name_'+act+'" placeholder="Activity name">'
                                +'</div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                                +'<div class="col-xs-3 col-lg-3">'
                                    +'<label>Position</label>'
                                +'</div>'
                                +'<div class="col-xs-12 col-sm-6 col-lg-9">'
                                    +'<input type="text" class="form-control" id="act_position_'+act+'" name="act_position_'+act+'" placeholder="Position">'
                                +'</div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                                +'<div class="col-xs-3 col-lg-3">'
                                    +'<label>Description</label>'
                                +'</div>'
                                +'<div class="col-xs-12 col-sm-6 col-lg-9">'
                                    +'<textarea class="form-control tinymce_act_'+act+'" id="act_description_'+act+'" name="act_description_'+act+'" placeholder="Description" rows="4"></textarea>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>';
        $("#new_row_act").append(html);
        $('.datepicker_act_'+act).datepicker(
          {   dateFormat: 'dd-mm-yy',
              changeMonth: true,
              changeYear:true,
              numberOfMonths: 1,
              onSelect: function(selectedDate) {
                   // we can write code here
               }
        });
        tinymce.init({
            selector:'textarea.tinymce_act_'+act,
            height: "",
            width:"",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern imagetools code fullscreen"
            ],
            toolbar1: "undo redo bold italic underline strikethrough cut copy paste",
            toolbar2:"alignleft aligncenter alignright alignjustify bullist numlist outdent indent blockquote searchreplace ",
            toolbar3:"styleselect formatselect fontselect fontsizeselect ",
            toolbar4: "table | hr removeformat | subscript superscript | charmap emoticons ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft | link unlink anchor image media | insertdatetime preview | forecolor backcolor print fullscreen code ",
            image_advtab: true,
            menubar: false,
            toolbar_items_size: 'small',
            relative_urls: false,
            remove_script_host : false,
            autosize:true,
         });

    }
    function deleteRowAct(id){
        $('#new_row_act_'+id).html(' ');
    }
</script>