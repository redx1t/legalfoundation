<script>
    addFileToUpload() {
        $(document).ready(function() {
            $("#addProductFile").append( <
                div class = "col-md-4" >
                <
                div class = "form-group" >
                <
                input type = "file"
                name = "files[]" >
                <
                input type = "text"
                name = "file_name" >
                <
                textarea class = "form-control"
                name = "comments" > < /textarea> < /
                div > <
                /div> < /
                div >
            );
        });
    }
</script>
