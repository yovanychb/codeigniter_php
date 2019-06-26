<?php
class UsuariosModel extends CI_Model
{
    //metodo get
    public function getAll()
    {
        return $this->db->get('usuarios')->result();
    }

    public function ingresar($datos)
    {
        $sql = "INSERT INTO usuarios(nombre,apellido) VALUES(?,?)";
        $this->db->query($sql, $datos);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM usuarios WHERE id_usuarios = ?";
        $this->db->query($sql,$id);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuarios WHERE id_usuarios = ?";
        return $this->db->query($sql,$id)->row();
    }

    public function update($datos)
    {
        $sql = "UPDATE usuarios SET nombre = ?,apellido = ? WHERE id_usuarios = ?";
        $this->db->query($sql, $datos);
    }
}
