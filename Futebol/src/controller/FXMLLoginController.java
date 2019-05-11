package controller;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.scene.control.TextField;
import javafx.fxml.Initializable;
import javafx.scene.image.ImageView;
import view.Futebol;

public class FXMLLoginController implements Initializable {
    @FXML
    private ImageView foto;
    
    @FXML
    private TextField txtVerificar;

    @FXML
    private TextField txtVerificarSenha;

    @FXML
    void cancelar(){
        Futebol.trocaCena("inicio");
    }
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
