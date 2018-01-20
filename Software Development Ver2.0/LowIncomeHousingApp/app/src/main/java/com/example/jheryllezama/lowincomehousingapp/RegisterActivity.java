package com.example.jheryllezama.lowincomehousingapp;

import android.content.Intent;
import android.support.v7.app.AlertDialog;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.toolbox.Volley;

import org.json.JSONException;
import org.json.JSONObject;

public class RegisterActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        //Creates the variables on register page based on the layout
        final EditText etRegName = (EditText) findViewById(R.id.etRegName);
        final EditText etRegUsername = (EditText) findViewById(R.id.etRegUsername);
        final EditText etRegPassword = (EditText) findViewById(R.id.etRegPassword);
        final Button bRegister = (Button) findViewById(R.id.registerBTN);

        //The following code is the logic when the register button is pressed, it grabs all the text within the text fields
        bRegister.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                final String name = etRegName.getText().toString();
                final String username = etRegUsername.getText().toString();
                final String password = etRegPassword.getText().toString();

                //Uses the volley extension to convert the data into a JSON format for talking with the database
                Response.Listener<String> responseListener = new Response.Listener<String>() {
                    @Override
                    public void onResponse(String response) {
                        //Try and catch statement for any errors during json response
                        try {
                            JSONObject jsonResponse = new JSONObject(response);

                            //Grabs the success boolean from the register.php file
                            boolean success = jsonResponse.getBoolean("success");

                            //Once the register button is pressed and the information is successfully passed on then take user back to login activity automatically
                            if (success) {
                                Intent intent = new Intent(RegisterActivity.this, LoginActivity.class);
                                RegisterActivity.this.startActivity(intent);
                            }
                            //Creates a register fail button that allows the user to retry again
                            else{
                                AlertDialog.Builder builder = new AlertDialog.Builder(RegisterActivity.this);
                                builder.setMessage("Register Failed")
                                        .setNegativeButton("Retry", null)
                                        .create()
                                        .show();
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                };

                //Creates the request pass to the register request java file
                RegisterRequest registerRequest = new RegisterRequest(name, username, password, responseListener);
                RequestQueue queue = Volley.newRequestQueue(RegisterActivity.this);
                queue.add(registerRequest);
            }
        });
    }
}
