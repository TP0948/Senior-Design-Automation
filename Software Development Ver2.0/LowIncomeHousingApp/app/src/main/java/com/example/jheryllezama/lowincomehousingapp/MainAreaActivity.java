package com.example.jheryllezama.lowincomehousingapp;

import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.EditText;
import android.widget.TextView;

public class MainAreaActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main_area);

        //Creates the hello user text at the top of the main activity page
        final TextView welcomeMessage = (TextView) findViewById(R.id.tvWelcomeMsg);
    }
}
