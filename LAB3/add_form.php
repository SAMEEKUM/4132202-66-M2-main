<form>
    <label for="id">ID : </label>
    <input type="text" name="id" id="id_p"> <br>
    <label for="name_p">NAME : </label>
    <input type="text" name="name" id="name_p"> <br>
    <label for="email_p">EMAIL : </label>
    <input type="text" name="email" id="email_p"> <br>
    <button type="submit" class="btn btn-primary">SAVE</button>
    <button type="reset" class="btn btn-danger">CANCLE</button>
</form>

<script>
    $(function(){
        $("form").submit(function(e){
            e.preventDefault();

            $.ajax({
                url:"/add_member.php",
                method: "POST",
                data: fm.serialize(),
                success:funtion(res) {
                    if (res == 'error')
                        alert("Cant insert data.")
                    else
                        $("#tb_member").load("/listitem.php")
                }
            });
        });
    });
</script>