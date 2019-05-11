/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.io.IOException;
import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

public class Futebol extends Application {
      private static Stage stage;
      
      private static Scene inicio;
      private static Scene login;
      private static Scene cadastra;
      
    @Override
    public void start(Stage primaryStage)throws IOException {
        stage = primaryStage;
         
        Parent fxmlInicio = FXMLLoader.load(getClass().getResource("FXMLInicio.fxml"));
        inicio = new Scene(fxmlInicio);
        
        Parent fxmlLogin = FXMLLoader.load(getClass().getResource("FXMLLogin.fxml"));
        login = new Scene(fxmlLogin);
        
        Parent fxmlCadastra = FXMLLoader.load(getClass().getResource("FXMLCadastra.fxml"));
        cadastra = new Scene(fxmlCadastra);
        
        stage.setTitle("Futebol");
        stage.setScene(inicio);
        stage.show();
    }
    
    public static void trocaCena(String op){
          switch(op){
              case "inicio":
                  stage.setScene(inicio);
                  break;
              case "cadastra":
                 stage.setScene(cadastra);
                 break;
              case "login":
                  stage.setScene(login);
                  break;
          }
    }
    public static void main(String[] args) {
        launch(args);
    }
    
}
