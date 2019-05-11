/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.image.ImageView;
import view.Futebol;

/**
 * FXML Controller class
 *
 * @author localhost
 */
public class FXMLInicioController implements Initializable {

   @FXML
    private ImageView foto;
   
   @FXML
    void cadastra() {
            Futebol.trocaCena("cadastra");
    }
    
    @FXML
    void login(){
        Futebol.trocaCena("login");
    }
   
   @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    
    
}
