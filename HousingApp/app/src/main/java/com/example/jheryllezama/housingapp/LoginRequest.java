package com.example.jheryllezama.housingapp;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

/**
 * Created by jheryllezama on 1/21/18.
 */

public class LoginRequest extends StringRequest {

    //Creates the link to the login.php file on MySQL Server
    private static final String LOGIN_REQUEST_URL = "http://localhost/AndroidApp/Login.php";
    private Map<String, String> params;

    //Passes the variables through volley
    public LoginRequest(String email, String password, Response.Listener<String> listener){
        super(Method.POST, LOGIN_REQUEST_URL, listener, null);
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
