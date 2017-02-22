<section id="section_education">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">EDUCATION</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_edu" id="num_edu" value="0" />
            <a class="btn btn-success insert-row" id="insert_row_0"  onclick="newRowEducation();" href="javascript:void(0)">Thêm</a>
        </div>
    </div>
    <div id="new_row_education">
        <div id="new_row_education_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" id="0" onclick="deleteRowEducation(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <div class="row">
                        <div class="col-xs-5">
                            <input type="text" id="edu_start_date_0" name="edu_start_date_0"  class="datepicker1 date-education" placeholder="click choose date">
                            @if ($errors->has('edu_start_date_0'))
                            <span class="help-block">
                                <strong>{{ $errors->first('edu_start_date_0') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-xs-2">
                            <label>to</label>
                        </div>
                        <div class="col-xs-5">
                            <input type="text" id="edu_end_date_0" name="edu_end_date_0" class="datepicker1 date-education" placeholder="click choose date">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <textarea class="form-control" id="school_name_0" name="school_name_0" placeholder="Education" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    edu=0;
    function newRowEducation(){
        edu++;
        num = $("#num_edu").val();
        tem = parseInt(num) + 1;
        $("#num_edu").val(tem);
        html = '<div id="new_row_education_'+edu+'">'
                +'<div class="row">'
                    +'<div class="col-xs-12 col-sm-12 col-md-12">'
                        +'<a class="delete-row" id="'+edu+'" onclick="deleteRowEducation(this.id)" href="javascript:void(0)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                    +'</div>'
                +'</div>'
                +'<div class="row">'
                    +'<div class="col-xs-6 col-lg-4">'
                        +'<div class="row">'
                            +'<div class="col-xs-5">'
                                +'<input type="text" id="edu_start_date_'+edu+'" name="edu_start_date_'+edu+'"  class="datepicker_edu_'+edu+' date-education" placeholder="click choose date">'
                            +'</div>'
                            +'<div class="col-xs-2">'
                                +'<label>to</label>'
                            +'</div>'
                            +'<div class="col-xs-5">'
                                +'<input type="text" id="edu_end_date_'+edu+'" name="edu_end_date_'+edu+'" class="datepicker_edu_'+edu+' date-education" placeholder="click choose date">'
                            +'</div>'
                        +'</div>'
                    +'</div>'
                    +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                        +'<textarea class="form-control" id="school_name_'+edu+'" name="school_name_'+edu+'" placeholder="Education" rows="1"></textarea>'
                    +'</div>'
                +'</div>'
                +'</div>';
        $("#new_row_education").append(html);
        $('.datepicker_edu_'+edu).datepicker(
          {   dateFormat: 'dd-mm-yy',
              changeMonth: true,
              changeYear:true,
              numberOfMonths: 1,
              onSelect: function(selectedDate) {
                   // we can write code here
               }
        });
    }
    function deleteRowEducation(id){
        $('#new_row_education_'+id).html(' ');
        // alert(id);
    }
</script>