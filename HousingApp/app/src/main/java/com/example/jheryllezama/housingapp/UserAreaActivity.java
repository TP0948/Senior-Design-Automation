package com.example.jheryllezama.housingapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.TextView;

public class UserAreaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_area);

        final TextView WelcomeMsg = (TextView) findViewById(R.id.tvWelcomeMsg);

        Intent intent = getIntent();
        String email = intent.getStringExtra("email");

        //Displays the email to the UserAreaActivity
        String message = "Welcome! You are currently signed in as " + email;
        WelcomeMsg.setText(message);
    }
}
