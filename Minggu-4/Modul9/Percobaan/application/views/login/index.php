<!DOCTYPE html>
<html>
    <head>
        <title>LOGIN</title>
    </head>
    <body>
        <?= $this->session->flashdata('message'); ?>
        <form method="POST" action="<?= base_url('login/cek_login') ?>">
            <table>
                <tr>
                    <td align="center colspan="2">Enter Login Details</td>
                </tr>
                <tr>
                    <td align="right">Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td align="right">Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td align="center" colspan="2"><button type="submit">SUBMIT</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>