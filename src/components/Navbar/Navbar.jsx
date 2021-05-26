import React from "react";
import { NavLink } from "react-router-dom";

import "./Navbar.css";
const Navbar = ({ cartNumber }) => {
  return (
    <>
      <div className="container-fluid menu">
        <div className="row">
          <div className="col-12">
            <nav className="navbar navbar-expand-lg navbar-light bg-light">
              <div className="container-fluid">
                <NavLink exact className="navbar-brand mx-auto" to="/">
                  Rupom's Plants Corner
                </NavLink>
                <button
                  className="navbar-toggler"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent"
                  aria-expanded="false"
                  data-target="/navbarSupportedContent"
                  aria-label="Toggle navigation"
                >
                  <span className="navbar-toggler-icon"></span>
                </button>
                <div
                  className="collapse navbar-collapse"
                  id="navbarSupportedContent"
                >
                  <ul className="navbar-nav m-auto  mb-2 mb-lg-0">
                    <li className="nav-item ">
                      <NavLink
                        exact
                        activeClassName="menu_active"
                        className="nav-link active"
                        aria-current="page"
                        to="/"
                      >
                        Home
                      </NavLink>
                    </li>
                    <li className="nav-item">
                      <NavLink
                        exact
                        activeClassName="menu_active"
                        className="nav-link"
                        to="/about"
                      >
                        About
                      </NavLink>
                    </li>
                    <li className="nav-item ">
                      <NavLink
                        activeClassName="menu_active"
                        exact
                        to="/services"
                        className="nav-link"
                      >
                        Serviecs
                      </NavLink>
                    </li>
                    <li className="nav-item">
                      <NavLink
                        exact
                        activeClassName="menu_active"
                        className="nav-link"
                        to="/price"
                      >
                        Price Plan
                      </NavLink>
                    </li>
                    <li className="nav-item">
                      <NavLink
                        exact
                        activeClassName="menu_active"
                        className="nav-link"
                        to="/contact"
                      >
                        Contact
                      </NavLink>
                    </li>
                    <li className="nav-item">
                      <NavLink
                        activeClassName="menu_active"
                        exact
                        className="nav-link"
                        to="/registration"
                      >
                        Registration
                      </NavLink>
                    </li>
                    <li className="nav-item">
                      <NavLink
                        activeClassName="menu_active"
                        exact
                        className="nav-link"
                        to="/cart"
                      >
                        <i className="fa fa-shopping-cart" aria-hidden="true">
                          {" "}
                          <span className="cart_num">{cartNumber}</span>{" "}
                        </i>
                      </NavLink>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </>
  );
};

export default Navbar;
