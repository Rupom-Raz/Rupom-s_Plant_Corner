import React from "react";
import { NavLink } from "react-router-dom";
import "./Registration.css";
const Registration = () => {
  return (
    <>
      <div className="container-fluid">
        <div className="row reg ">
          <div className="col-12 col-md-4  m-auto">
            <form>
              <div className="reg_form">
                <div className="logo"></div>
                <div className="sub-title">Signup Form</div>
                <div className="input-fields">
                  <div className="fname">
                    <i className="fa fa-user" aria-hidden="true"></i>
                    <input
                      type="text"
                      placeholder="Enter your first name"
                      id="fname"
                    />
                  </div>

                  <div className="lname">
                    <i className="fa fa-user" aria-hidden="true"></i>
                    <input
                      type="text"
                      placeholder="Enter your last name"
                      id="lname"
                    />
                  </div>

                  <div className="email">
                    <i className="fa fa-envelope-o" aria-hidden="true"></i>
                    <input
                      type="text"
                      placeholder="Enter your email"
                      id="email"
                    />
                  </div>

                  <div className="phone">
                    <i className="fa fa-phone-square" aria-hidden="true"></i>
                    <input
                      type="text"
                      placeholder="Enter your phone number"
                      id="phone"
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

                  <div className="confirm_password">
                    <i className="fa fa-lock" aria-hidden="true"></i>
                    <input
                      type="password"
                      placeholder="Confirm your password"
                      id="confirm_password"
                    />
                  </div>
                </div>
                <NavLink className="btn" exact to="/">
                  Submit
                </NavLink>

                <div className="link">
                  <NavLink exact to="/">Forgot password?</NavLink> already have an account?
                  <NavLink exact to="./login">
                    SignIN
                  </NavLink>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </>
  );
};

export default Registration;
