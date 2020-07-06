<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Receipt example</title>
    </head>
    <body>
        <div class="ticket">
            <p class="centered">
                <span style="font-size: 16px;font-weight: bold;">Receipt Kuropos</span>
                <br>
                <br>No. <?= $data_transaksi['transaksi_no'] ?>
                <br>Atas Nama. <?= $data_transaksi['transaksi_atasnama'] ?>
                <br>Tanggal. <?= $data_transaksi['transaksi_tanggal'] ?>
            </p>
            <table>
                <thead>
                    <tr>
                        <th class="quantity">Q.</th>
                        <th class="description">Description</th>
                        <th class="price">RP.</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $total =0;
                    foreach ($detail_transaksi as $key => $value) {
                        $total += ($value['transaksi_detail_harga']*$value['transaksi_detail_jumlah']);
                    ?>
                    <tr>
                        <td class="quantity"><?= $value['transaksi_detail_jumlah'] ?></td>
                        <td class="description"><?= $value['transaksi_detail_nama'] ?></td>
                        <td class="price"><?= number_format($value['transaksi_detail_harga'],0,".",".") ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <!-- <td class="quantity"></td> -->
                        <!-- <td class="description"></td> -->
                        <td class="price" colspan="3">TOTAL : Rp.<?= number_format($total,0,".",".") ?></td>
                    </tr>
                </tbody>
            </table>
            <p class="centered">Thanks for your purchase!
                <br>https://pos.kurohat.my.id/</p>
        </div>
        <button id="btnPrint" class="hidden-print">Print</button>
    </body>
</html>
<style type="text/css">
    * {
        font-size: 12px;
        font-family: 'Times New Roman';
    }

    td,
    th,
    tr,
    table {
        border-top: 1px solid black;
        border-collapse: collapse;
    }

    td.description,
    th.description {
        width: 75px;
        max-width: 75px;
    }

    td.quantity,
    th.quantity {
        width: 30px;
        max-width: 30px;
        word-break: break-all;
    }

    td.price,
    th.price {
        width: 50px;
        max-width: 50px;
        word-break: break-all;
        text-align: center;
    }

    .centered {
        text-align: center;
        align-content: center;
    }

    .ticket {
        width: 155px;
        max-width: 155px;
    }

    img {
        max-width: inherit;
        width: inherit;
    }

    @media print {
        .hidden-print,
        .hidden-print * {
            display: none !important;
        }
    }
</style>
<script type="text/javascript">
    var btnPrint = document.getElementById("btnPrint");
    btnPrint.addEventListener("click", function() {
        doPrint();
    },false);
    function doPrint(){
        window.print();
    }
    setTimeout(function() {
        // doPrint();
    }, 500);
</script>