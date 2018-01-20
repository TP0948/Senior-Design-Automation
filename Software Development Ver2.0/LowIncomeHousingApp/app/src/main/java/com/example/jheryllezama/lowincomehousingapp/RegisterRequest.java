package com.example.jheryllezama.lowincomehousingapp;

import com.android.volley.Response;
import com.android.volley.toolbox.StringRequest;

import java.util.HashMap;
import java.util.Map;

public class RegisterRequest extends StringRequest {

    //Insert the url link to the MySQL database below in ""
    private static final String Register_Request_URL = "";
    private Map<String, String> params;

    //The following code works with the .php files to pass parameters into MySQL
    public RegisterRequest(String name, String username, String password, Response.Listener<String> listener){
        super(Method.POST, Register_Request_URL, listener, null);
        params = new HashMap<>();
        params.put("name", name);
        params.put("username", username);
        params.put("password", password);
    }

    //The volley extension added to this project calls the above assignment operation
    @Override
    public Map<String, String> getParams() {
        return params;
    }
}
