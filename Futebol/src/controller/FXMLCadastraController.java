/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import javafx.scene.control.TextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import model.Usuario;
import view.Futebol;
import dao.UsuarioDAO;
import javafx.scene.image.ImageView;
import javax.swing.JOptionPane;
/**
 * FXML Controller class
 *
 * @author localhost
 */
public class FXMLCadastraController implements Initializable {
   
    @FXML
    private TextField txtNick;
    
    @FXML
    private TextField txtCsenha;
    
    @FXML
    private TextField txtSenha;

    @FXML
    private TextField txtEmail;

    @FXML
    void cancelar() {
        Futebol.trocaCena("inicio");
    }

    @FXML
    void manda() {
        Usuario u = new Usuario();
          UsuarioDAO dao = new UsuarioDAO();
          u.setNick(txtNick.getText());
          u.setEmail(txtEmail.getText());
          u.setSenha(txtSenha.getText());
          dao.create(u);
    }
     
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
