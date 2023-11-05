<!DOCTYPE html>
<html>

<head>
    <title>Drag and Drop to Form</title>
    <style>
        #form-container {
            width: 300px;
            padding: 10px;
            border: 2px dashed #000;
        }
    </style>
</head>

<body>
    <div id="draggable-item" draggable="true" ondragstart="return dragStart(ev)" data-item="Item 1">
        <p>Drag Me</p>
    </div>
    <div id="form-container">
        <form id="item-form">
            <label for="item-input">Item:</label>
            <input type="text" id="item-input" name="item">
            <button type="submit">送信</button>
        </form>
    </div>

    <script>
        const draggableItem = document.getElementById("draggable-item");
        const itemInput = document.getElementById("item-input");

        draggableItem.addEventListener("dragstart", function(event) {
            event.dataTransfer.setData("text", event.target.dataset.item);
        });

        itemInput.addEventListener("drop", function(event) {
            event.preventDefault();
            const droppedItem = event.dataTransfer.getData("text");
            itemInput.value = droppedItem;
        });

        itemInput.addEventListener("dragover", function(event) {
            event.preventDefault();
        });
    </script>
</body>

</html>