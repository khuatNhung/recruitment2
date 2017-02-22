<section id="section_certification">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">CERTIFICATION</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_cer" id="num_cer" value="0" />
            <a class="btn btn-success insert-row" href="javascript:void(0)" id="insert_row_cer" onclick="newRowCer();">Thêm</a>
        </div>
    </div>
    <div id="new_row_cer">
        <div id="new_row_cer_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" id="0" href="javascript:void(0)" onclick="deleteRowCer(this.id);"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <input id="date_of_issue_0" name="date_of_issue_0" type="text" class="form-control datepicker1 date-issue" placeholder="Date of issue" >
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <textarea class="form-control" id="cer_name_0" name="cer_name_0" placeholder="certification name" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    //insert and  delete row cer
    cer=0;
    function newRowCer(){
        // alert('hello');
        cer++;
        num = $("#num_cer").val();
        tem = parseInt(num) + 1;
        $("#num_cer").val(tem);
        html='<div id="new_row_cer_'+cer+'">'
                    +'<div class="row">'
                        +'<div class="col-xs-12 col-sm-12 col-md-12">'
                            +'<a class="delete-row" id="'+cer+'" href="javascript:void(0)" onclick="deleteRowCer(this.id)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                        +'</div>'
                    +'</div>'
                   +' <div class="row">'
                        +'<div class="col-xs-6 col-lg-4">'
                            +'<input id="date_of_issue_'+cer+'" name="date_of_issue_'+cer+'" type="text" class="form-control datepicker_cer_'+cer+' date-issue" placeholder="Date of issue" >'
                        +'</div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<textarea class="form-control" id="cer_name_'+cer+'" name="cer_name_'+cer+'" placeholder="certification name" rows="1"></textarea>'
                        +'</div>'
                    +'</div>'
            +'</div>';
        $("#new_row_cer").append(html);
        $('.datepicker_cer_'+cer).datepicker(
          {   dateFormat: 'dd-mm-yy',
              changeMonth: true,
              changeYear:true,
              numberOfMonths: 1,
              onSelect: function(selectedDate) {
                   // we can write code here
               }
        });
    }
    function deleteRowCer(id){
        $('#new_row_cer_'+id).html(' ');
        // alert('hello');
    }

</script>