import React from "react";
import { NavLink } from "react-router-dom";
import "./Login.css";
const Login = () => {
  return (
    <>
      <div className="container-fluid">
        <div className="row login">
          <div className="col-12 col-md-4  m-auto">
            <form>
              <div className="login_form">
                <div className="logo"></div>

                <div className="sub-title">Login Form</div>
                <div className="input-fields">
                  <div className="email">
                    <i className="fa fa-envelope-o" aria-hidden="true"></i>
                    <input
                      type="text"
                      placeholder="Enter your email"
                      id="email"
                    />
                  </div>

                  <div className="password">
                    <i className="fa fa-lock" aria-hidden="true"></i>
                    <input
                      type="password"
                      placeholder="Enter your password"
                      id="password"
                    />
                  </div>
                </div>
                <NavLink className="btn" exact to="/">
                  LOGIN
                </NavLink>

                <div className="link">
                  <NavLink exact to="/">
                    Forgot password?
                  </NavLink>
                  or
                  <NavLink to="./registration">Signup</NavLink>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </>
  );
};

export default Login;
