
package dao;

import java.sql.PreparedStatement;
import java.sql.Connection;
import java.sql.SQLException;
import javax.swing.JOptionPane;
import model.Usuario;

public class UsuarioDAO {
    
    public void create(Usuario u){
        Connection con = ConnectionFutebol.getConnection();
        PreparedStatement stmt = null;
        try {
            stmt = con.prepareStatement("INSERT INTO usuario (nick,email,senha)VALUES(?,?,?)");
            stmt.setString(1, u.getNick());
            stmt.setString(2, u.getEmail());
            stmt.setString(3, u.getSenha());
            
            stmt.executeUpdate();
            
            JOptionPane.showMessageDialog(null,"Salvo com Sucesso!!");
        } catch (SQLException ex) {
            JOptionPane.showMessageDialog(null,"Erro ao salva!!"+ex);
        }finally{
            ConnectionFutebol.closeConnection(con, stmt);
        }
        
    }
}
