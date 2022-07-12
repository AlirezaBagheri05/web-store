<?php
    function pro_search(){
        $codes = null;
        ?>
        <form class='search_pages' method="get">
            <div>
            <label for="search">search in pages</label>
            <select placeholder="pages" name="pages" id="search">
                        <option visible value="pages" >pages</option>
                        <option value="header">header</option>
                        <option value="footer">footer</option>
                        <option value="home">home</option>
                        <option value="login">login</option>
            </select> 
            </div>
            <input type="submit" value="search">
        </form>
        <?PHP

    }
?>