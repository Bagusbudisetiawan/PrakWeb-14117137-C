<!DOCTYPE html>
<html>
    <head>
        <title>User PABW</title>
    </head>
    <body>
        <table border="0" cellpadding="10" cellspacing="1" width="100%">
            <tr>
                <td align="center">User Dashboard</td>
            </tr>
            <tr>
                <td>
                    Selamat datang <?= $this->session->userdata('username'); ?>.
                    Klik di sini untuk <a href="<?= base_url('user/logout'); ?>" title="Logout"> Logout</a>.
                </td>
            </tr>
        </table>

        <form method="POST" action="<?= base_url('Article/insert') ?>">
            <div>
                Isi<br>
                <textarea name="content" rows="3"></textarea>
            </div>
            <div>
                <input type="submit" value="Post">
            </div>
        </form>

        <table>
            <tr>
                <th>ID</th>
                <th>Penulis</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
            <?php
                foreach($articles as $row) {
                    echo "
                        <tr>
                            <td>" . $row->id . "</td>
                            <td>" . $row->username . "</td>
                            <td>" . $row->text_article . "</td>
                    ";

                    if($this->session->userdata('username') == $row->username || $this->session->userdata('fname') == 'Administrator') {
                        echo "
                            <td><form method=\"POST\" action=\"" . base_url('Article/update') . "\"><textarea name=\"isi\"></textarea><input type=\"hidden\" name=\"id\" value=\"" . $row->id . "\"><br><input type=\"submit\" value=\"Update\"></form><form method=\"POST\" action=\"" . base_url('Article/delete') . "\"><input type=\"hidden\" name=\"id\" value=\"" . $row->id . "\"><input type=\"submit\" value=\"Hapus\"></form></td>
                        ";
                    } else {
                        echo "<td align=\"center\"> - </td>";
                    }
                    
                    echo "
                        </tr>
                    ";
                }
            ?>
        </table>
    </body>
</html>