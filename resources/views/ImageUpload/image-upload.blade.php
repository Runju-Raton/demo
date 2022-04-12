<form action="">
    <input type="file"> <br> <br>
    <button onclick="imageUpload(e)">save</button>
</form>

    
    <script>
        function imageUpload(e){
            let file = e.target
            console.log(file)
        }
    </script>




