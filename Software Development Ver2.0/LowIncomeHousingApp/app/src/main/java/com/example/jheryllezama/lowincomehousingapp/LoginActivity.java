package com.example.jheryllezama.lowincomehousingapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class LoginActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);

        final EditText etLogUsername = (EditText) findViewById(R.id.etLogUsername);
        final EditText etLogPassword = (EditText) findViewById(R.id.etLogPassword);

        final Button registerLogBTN = (Button) findViewById(R.id.registerLogBTN);
        final Button loginBTN = (Button) findViewById(R.id.loginBTN);

        //Links the register button on the login page to the register page
        registerLogBTN.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent registerIntent = new Intent(LoginActivity.this, RegisterActivity.class);
                LoginActivity.this.startActivity(registerIntent);
            }
        });
    }
}
