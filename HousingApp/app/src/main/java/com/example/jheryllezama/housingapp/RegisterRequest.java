package com.example.jheryllezama.housingapp;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by jheryllezama on 1/21/18.
 */

public class RegisterRequest extends StringRequest {

    //Creates the link to the register.php file on MySQL Server
    private static final String REGISTER_REQUEST_URL = "https://www.000webhost.com/members/website/senior-design-automation/database/Register.php";
    private Map<String, String> params;

    //Passes the variables through volley
    public RegisterRequest(String email, String password, Response.Listener<String> listener){
        super(Method.POST, REGISTER_REQUEST_URL, listener, null);
        params = new HashMap<>();
        params.put("email", email);
        params.put("password", password);
    }

    //Returns the params data
    @Override
    public Map<String, String> getParams() {
        return params;
    }
}
