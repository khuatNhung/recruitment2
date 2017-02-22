<section id="section_prize">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-8">
            <h3 class="title">PRIZE</h3>
        </div>
        <div class="col-xs-6 col-lg-4">
            <input type="hidden" name="num_prize" id="num_prize" value="0" />
            <a class="btn btn-success insert-row" id="insert_row_prize" href="javascript:void(0)" onclick="newRowPrize()">Thêm</a>
        </div>
    </div>
    <div id="new_row_prize">
        <div id="new_row_prize_0">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <a class="delete-row" href="javascript:void(0)" id="0" onclick="deleteRowPrize(this.id)"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-lg-4">
                    <input id="prize_year_0" name="prize_year_0" type="text" class="form-control prize-year" placeholder="Time" >
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-8">
                    <textarea class="form-control" id="prize_name_0" name="prize_name_0" placeholder="Prize name" rows="1"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    //insert and delete prize
    prize=0;
    function newRowPrize(){
        // alert('hello');
        prize++;
        num = $("#num_prize").val();
        tem = parseInt(num) + 1;
        $("#num_prize").val(tem);
        html='<div id="new_row_prize_'+prize+'">'
                    +'<div class="row">'
                        +'<div class="col-xs-12 col-sm-12 col-md-12">'
                            +'<a class="delete-row" href="javascript:void(0)" id="'+prize+'" name="'+prize+'" onclick="deleteRowPrize(this.id)"><i class="glyphicon glyphicon-remove text-danger"></i></a>'
                        +'</div>'
                    +'</div>'
                    +'<div class="row">'
                        +'<div class="col-xs-6 col-lg-4">'
                            +'<input id="prize_year_'+prize+'" name="prize_year_'+prize+'" type="text" class="form-control prize-year" placeholder="Time" >'
                        +'</div>'
                        +'<div class="col-xs-12 col-sm-6 col-lg-8">'
                            +'<textarea class="form-control" id="prize_name_'+prize+'" name="prize_name_'+prize+'" placeholder="Prize name" rows="1"></textarea>'
                        +'</div>'
                    +'</div>';
        $("#new_row_prize").append(html);
    }
    function deleteRowPrize(id){
        $('#new_row_prize_'+id).html(' ');
    }

</script>