<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Show Modal</title>
    <style>
        /* CSS để ẩn modal mặc định */
        #myModal {
            display: none;
        }
    </style>
</head>
<body>

<!-- Modal -->
<div id="myModal" style="background-color: blueviolet;font-size: 30px">
    <div id="modalContent">
        <span class="close" onclick="closeModal()">&times;</span>
        <p>Nội dung modal ở đây.</p>
    </div>
</div>

<script>
    // Hàm hiển thị modal tự động khi trang web được tải
    window.onload = function () {
        openModal();
    };

    // Hàm mở modal và thiết lập thời gian hiển thị là 3 giây
    function openModal() {
        document.getElementById("myModal").style.display = "block";
        setTimeout(function () {
            closeModal();
        }, 3000); // 3000 milliseconds = 3 seconds
    }

    // Hàm đóng modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
</script>

</body>
</html>
