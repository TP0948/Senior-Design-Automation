package jdwallace.oakland.edu.homeautomation;

import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends AppCompatActivity {
    public TextView resultTextView;

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        Button submitBtn = (Button) findViewById(R.id.submitBtn);
        submitBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                EditText nameEditText = (EditText) findViewById(R.id.NameEditText);
                EditText passwordEditText = (EditText) findViewById(R.id.PasswordEditText);

                int num1 = Integer.parseInt(nameEditText.getText().toString());
                int num2 = Integer.parseInt(passwordEditText.getText().toString());

            }
        });
    }
}
