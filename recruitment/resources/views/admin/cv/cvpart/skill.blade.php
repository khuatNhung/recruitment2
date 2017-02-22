<section id="section_skill">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">SKILL</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_skill" id="num_skill" value="0" />
            <a class="btn btn-success insert-row" onclick="newRowSkill()" href="javascript:void(0)">Thêm</a>
        </div>
    </div>
    <div id="new_row_skill">
        <div id="new_row_skill_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" id="0" onclick="deleteRowSkill(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <div class="row">
                        <div class="col-xs-6 col-lg-5">Skill name</div>
                        <div id="skill_name_new_0" class="col-xs-12 col-sm-6 col-lg-7">
                            <select name="skill_name_0" id="skill_name_0" name="skill_name_0" class="skill-name">
                                <option value="0">Choose skill</option>
                                @foreach($skills as $key =>$item)
                                <option value="{{$item->id}}">{{$item->skill_name}}</option>
                                @endforeach
                                <option id="0" onclick="newSkill(this.id);" value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <div class="row">
                        <div class="col-xs-6 col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" id="nhohon1nam" value="nhohon1nam" name="number_year_0"><label class="label-radio" for="nhohon1nam">&lt;1 year</label>
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" value="1nam" id="1nam" name="number_year_0"><label class="label-radio" for="1nam">1 year</label>
                            </label>
                        </div>
                        <!-- Add the extra clearfix for only the required viewport -->
                        <div class="clearfix visible-xs-block"></div>
                        <div class="col-xs-6 col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" value="3nam" id="3nam" name="number_year_0"><label class="label-radio" for="3nam">3 year</label>
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <label class="radio-inline">
                                <input type="radio" value="lonhon5nam" id="lonhon5nam" name="number_year_0"><label class="label-radio" for="lonhon5nam">&gt;5 year</label>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-3 col-lg-2">
                </div>
                <div class="col-xs-3 col-lg-2">
                    <label>Description</label>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <textarea class="form-control tinymce-small" id="skill_description_0" name="skill_description_0" placeholder="Description" rows="2"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    //insert and delete skill
    skill=0;
    function newRowSkill(){
        skill++;
        num = $("#num_skill").val();
        tem = parseInt(num) + 1;
        $("#num_skill").val(tem);
        html=' <div id="new_row_skill_'+skill+'">'
                    +'<div class="row">'
                        +'<div class="col-xs-12 col-sm-12 col-md-12">'
                            +'<a class="delete-row" id="'+skill+'" onclick="deleteRowSkill(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row">'
                        +'<div class="col-xs-6 col-lg-4">'
                            +'<div class="row">'
                                +'<div class="col-xs-6 col-lg-5">Skill name</div>'
                                +'<div id="skill_name_new_'+skill+'" class="col-xs-12 col-sm-6 col-lg-7">'
                                    +'<select name="skill_name_'+skill+'" id="skill_name_'+skill+'" class="skill-name">'
                                        +'<option value="0">Choose skill</option>'
                                        +'@foreach($skills as $key =>$item)'
                                        +'<option value="{{$item->id}}">{{$item->skill_name}}</option>'
                                        +'@endforeach'
                                        +'<option onclick="newSkill(this.id)" id="'+skill+'" value="other">Other</option>'
                                    +'</select>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<div class="row">'
                                +'<div class="col-xs-6 col-sm-3">'
                                    +'<label class="radio-inline">'
                                        +'<input type="radio" id="nhohon1nam_'+skill+'" value="nhohon1nam" name="number_year_'+skill+'"><label class="label-radio" for="nhohon1nam_'+skill+'">&lt;1 year</label>'
                                    +'</label>'
                                +'</div>'
                                +'<div class="col-xs-6 col-sm-3">'
                                    +'<label class="radio-inline">'
                                       +' <input type="radio" id="1nam_'+skill+'" value="1nam" name="number_year_'+skill+'"><label class="label-radio" for="1nam_'+skill+'">1 year</label>'
                                    +'</label>'
                                +'</div>'
                              +'<!-- Add the extra clearfix for only the required viewport -->'
                                +'<div class="clearfix visible-xs-block"></div>'
                                +'<div class="col-xs-6 col-sm-3">'
                                    +'<label class="radio-inline">'
                                        +'<input type="radio" id="3nam_'+skill+'" value="3nam" name="number_year_'+skill+'"><label class="label-radio" for="3nam_'+skill+'">3 year</label>'
                                    +'</label>'
                                +'</div>'
                               +' <div class="col-xs-6 col-sm-3">'
                                   +' <label class="radio-inline">'
                                        +'<input type="radio" id="lonhon5nam_'+skill+'" value="lonhon5nam" name="number_year_'+skill+'"><label class="label-radio" for="lonhon5nam_'+skill+'">&gt;5 năm</label>'
                                    +'</label>'
                                +'</div>'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row">'
                         +'<div class="col-xs-3 col-lg-2">'
                        +'</div>'
                        +'<div class="col-xs-3 col-lg-2">'
                            +'<label>Description</label>'
                        +'</div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<textarea class="form-control tinymce_'+skill+'" id="skill_description_'+skill+'" name="skill_description_'+skill+'" placeholder="Description" rows="2"></textarea>'
                        +'</div>'
                    +'</div>'
               +' </div>';
        $("#new_row_skill").append(html);
        $("input[name='number_year_"+skill+"']").click(function() {
              var previousValue = $(this).attr('previousValue');
              var name = $(this).attr('name');

              if (previousValue == 'checked') {
                $(this).removeAttr('checked');
                $(this).attr('previousValue', false);
              } else {
                $("input[name=" + name + "]:radio").attr('previousValue', false);
                $(this).attr('previousValue', 'checked');
              }
        });
        tinymce.init({
            selector:'textarea.tinymce_'+skill,
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
    function deleteRowSkill(id){
        $('#new_row_skill_'+id).html(' ');
    }

    //new skill name
    function newSkill(id){
        html='<div id="skill_name_new_'+id+'" class="col-xs-12 col-sm-6 col-lg-7">'
                +'<select style="display:none;" name="skill_name_'+id+'" id="skill_name_'+id+'" class="skill-name">'
                    +'<option id="'+id+'" value="other">Other</option>'
                +'</select>'
                +'<input type="text" id="input_skill_name_'+id+'" name="input_skill_name_'+id+'" class="skill-name" placeholder="Skill name">'
            +'</div>';
        $("#skill_name_new_"+id).html(html);
    }

</script>