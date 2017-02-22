<section id="section_experience">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">EXPERIENCE</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_exp" id="num_exp" value="0" />
            <a class="btn btn-success insert-row" onclick="newRowExp()" href="javascript:void(0)">Thêm</a>
        </div>
    </div>
    <div id="new_row_exp">
        <div id="new_row_exp_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" id="0" onclick="deleteRowExp(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <div class="row">
                        <div class="col-xs-5">
                            <input type="text" id="exp_start_date_0" name="exp_start_date_0" class="datepicker1 date-education" placeholder="click choose date">
                        </div>
                        <div class="col-xs-2">
                            <label>to</label>
                        </div>
                        <div class="col-xs-5">
                            <input type="text" id="exp_end_date_0" name="exp_end_date_0" class="datepicker1 date-education" placeholder="click choose date">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <input type="text" class="form-control" id="project_name_0" name="project_name_0" placeholder="Project name">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-4 col-lg-3">
                            <label>Company</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="work_unit_0" name="work_unit_0" placeholder="Company">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-4 col-lg-3">
                            <label>Team leader/Teacher</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="leader_teacher_0" name="leader_teacher_0" placeholder="Team leader/Teacher">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Size</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="size_0" name="size_0" placeholder="Size">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Description</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <textarea class="form-control tinymce-small" id="project_description_0" name="project_description_0" placeholder="Description" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Position</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="exp_position_0" name="exp_position_0" placeholder="Position">
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-4 col-lg-3">
                            <label>My responsibility</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <textarea class="form-control tinymce-small" id="task_0" name="task_0" placeholder="My responsibility" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row margin-row">
                        <div class="col-xs-3 col-lg-3">
                            <label>Technology</label>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-9">
                            <input type="text" class="form-control" id="technology_0" name="technology_0" placeholder="Technology">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    //insert and delete exp
    exp=0;
    function newRowExp(){
        // alert('hello');
        exp++;
        num = $("#num_exp").val();
        tem = parseInt(num) + 1;
        $("#num_exp").val(tem);
        html='<div id="new_row_exp_'+exp+'">'
                    +'<div class="row">'
                        +'<div class="col-xs-12 col-sm-12 col-md-12">'
                            +'<a class="delete-row" id="'+exp+'" onclick="deleteRowExp(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row">'
                        +'<div class="col-xs-6 col-lg-4">'
                            +'<div class="row">'
                                +'<div class="col-xs-5">'
                                    +'<input type="text" id="exp_start_date_'+exp+'" name="exp_start_date_'+exp+'" class="datepicker_exp_'+exp+' date-education" placeholder="click choose date">'
                                +'</div>'
                                +'<div class="col-xs-2">'
                                    +'<label>to</label>'
                                +'</div>'
                                +'<div class="col-xs-5">'
                                    +'<input type="text" id="exp_end_date_'+exp+'" name="exp_end_date_'+exp+'" class="datepicker_exp_'+exp+' date-education" placeholder="click choose date">'
                                +'</div>'
                            +'</div>'
                       +' </div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<div class="row">'
                               +' <div class="col-xs-12 col-sm-12 col-md-12">'
                                    +'<input type="text" class="form-control" id="project_name_'+exp+'" name="project_name_'+exp+'" placeholder="Project name">'
                                +'</div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                                +'<div class="col-xs-4 col-lg-3">'
                                    +'<label>Company</label>'
                                +'</div>'
                                +'<div class="col-xs-12 col-sm-6 col-lg-9">'
                                    +'<input type="text" class="form-control" id="work_unit_'+exp+'" name="work_unit_'+exp+'" placeholder="Company">'
                                +'</div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                                +'<div class="col-xs-4 col-lg-3">'
                                    +'<label>Team leader/Teacher</label>'
                                +'</div>'
                               +' <div class="col-xs-12 col-sm-6 col-lg-9">'
                                   +' <input type="text" class="form-control" id="leader_teacher_'+exp+'" name="leader_teacher_'+exp+'" placeholder="Team leader/Teacher">'
                               +' </div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                                +'<div class="col-xs-3 col-lg-3">'
                                   +' <label>Size</label>'
                               +' </div>'
                               +' <div class="col-xs-12 col-sm-6 col-lg-9">'
                                    +'<input type="text" class="form-control" id="size_'+exp+'" name="size_'+exp+'" placeholder="Size">'
                               +' </div>'
                           +'</div>'
                           +' <div class="row margin-row">'
                                +'<div class="col-xs-3 col-lg-3">'
                                   +' <label>Description</label>'
                                +'</div>'
                               +' <div class="col-xs-12 col-sm-6 col-lg-9">'
                                    +'<textarea class="form-control tinymce_exp_'+exp+'" id="project_description_'+exp+'" name="project_description_'+exp+'" placeholder="Description" rows="4"></textarea>'
                                +'</div>'
                            +'</div>'
                           +' <div class="row margin-row">'
                               +' <div class="col-xs-3 col-lg-3">'
                                    +'<label>Position</label>'
                               +' </div>'
                               +' <div class="col-xs-12 col-sm-6 col-lg-9">'
                                   +' <input type="text" class="form-control" id="exp_position_'+exp+'" name="exp_position_'+exp+'" placeholder="Position">'
                               +' </div>'
                            +'</div>'
                           +' <div class="row margin-row">'
                                +'<div class="col-xs-4 col-lg-3">'
                                   +' <label>My responsibility</label>'
                                +'</div>'
                                +'<div class="col-xs-12 col-sm-6 col-lg-9">'
                                   +' <textarea class="form-control tinymce_exp_'+exp+'" id="task_'+exp+'" name="task_'+exp+'" placeholder="My responsibility" rows="4"></textarea>'
                               +' </div>'
                            +'</div>'
                            +'<div class="row margin-row">'
                               +' <div class="col-xs-3 col-lg-3">'
                                   +' <label>Technology</label>'
                               +' </div>'
                               +' <div class="col-xs-12 col-sm-6 col-lg-9">'
                                   +' <input type="text" class="form-control" id="technology_'+exp+'" name="technology_'+exp+'" placeholder="Technology">'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                +'</div>';
        $("#new_row_exp").append(html);
        $('.datepicker_exp_'+exp).datepicker(
          {   dateFormat: 'dd-mm-yy',
              changeMonth: true,
              changeYear:true,
              numberOfMonths: 1,
              onSelect: function(selectedDate) {
                   // we can write code here
               }
        });
        tinymce.init({
            selector:'textarea.tinymce_exp_'+exp,
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
    function deleteRowExp(id){
        $('#new_row_exp_'+id).html(' ');
    }

</script>