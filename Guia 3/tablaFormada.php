<?php
    var_dump ($_POST);
    $people = isset($_POST) 
    ?
        [
            ['name' => $_POST["name"], 'age' => $_POST["age"], 'sex' => $_POST["sex"]]
        ] 
    : 
        array(); 
    
?>
    <!DOCTYPE html>
    <html>
        <table border=1>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Genero</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($people as $key => $persona) { ?>
                    <tr>
                        <?php foreach ($persona as $k => $dato) { ?>
                            <td> <?php echo $dato; ?></td>
                        <?php } ?>
                    </tr>  
                <?php } ?>
            </tbody>
        </table>
    </html>