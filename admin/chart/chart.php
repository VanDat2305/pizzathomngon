<div class="row m-2">
    <div class="col-3">
        <select name="search_date" id="search_date" class="form-control">
            <option value="100">7 Ngày Gần Nhất</option>
            <?php for ($i = 12; $i > 0; $i--) { ?>
                <option value="<?= 12 - $i ?>">Tháng <?= $i ?></option>
               
            <?php } ?>

        </select>
    </div>
</div>
<div class="row ml-1">
    <div class="col-8">
        <div class="card">
            <div class="card-header card-header-change ">Thống kê doanh thu trong 7 ngày</div>
            <div class="card-body">
                <p class="card-title"></p>
                <div class="canvas-wrapper">
                    <canvas class="chart total_money" id="linechart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card ">
            <div class="card-header">Thống kê trạng thái </div>
            <div class="card-body">
                <p class="card-title"></p>
                <div class="canvas-wrapper">
                    <canvas class="chart" id="piechart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row ml-2">

</div>
<script>


</script>