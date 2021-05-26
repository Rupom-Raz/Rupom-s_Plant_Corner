import React from "react";
import { NavLink } from "react-router-dom";

import "./Footer.css";
const Footer = () => {
  return (
    <>
      <footer className="footer-section">
        <div className="container">
          <div className="footer-cta pt-5 pb-5">
            <div className="row">
              <div className="col-xl-4 col-md-4 mb-30">
                <div className="single-cta">
                  <i className="fas fa-map-marker-alt"></i>
                  <div className="cta-text">
                    <h4>Find us</h4>
                    <span>Sylhet,Bangladesh</span>
                  </div>
                </div>
              </div>
              <div className="col-xl-4 col-md-4 mb-30">
                <div className="single-cta">
                  <i className="fa fa-phone" aria-hidden="true"></i>
                  <div className="cta-text">
                    <h4>Call us</h4>
                    <span>0123652542</span>
                  </div>
                </div>
              </div>
              <div className="col-xl-4 col-md-4 mb-30">
                <div className="single-cta">
                  <i className="fa fa-envelope-o" aria-hidden="true"></i>
                  <div className="cta-text">
                    <h4>Mail us</h4>
                    <span>mail@info.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div className="footer-content pt-5 pb-5">
            <div className="row">
              <div className="col-xl-4 col-lg-4 mb-50">
                <div className="footer-widget">
                  <div className="footer-logo">
                    <NavLink exact className="footer-logo mx-auto" to="/">
                      Rupom's Plants Corner
                    </NavLink>
                  </div>
                  <div className="footer-text">
                    <p>
                      Lorem ipsum dolor sit amet, consec tetur adipisicing elit,
                      sed do eiusmod tempor incididuntut consec tetur
                      adipisicing elit,Lorem ipsum dolor sit amet.
                    </p>
                  </div>
                  <div className="footer-social-icon">
                    <span>Follow me</span>
                    <a href="/">
                      <i className="fa fa-facebook-f facebook-bg"></i>
                    </a>
                    <a href="/">
                      <i className="fa fa-twitter twitter-bg"></i>
                    </a>
                    <a href="/"></a>
                  </div>
                </div>
              </div>
              <div className="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div className="footer-widget">
                  <div className="footer-widget-heading">
                    <h3>Useful Links</h3>
                  </div>
                  <ul>
                    <li>
                      <NavLink exact to="/">
                        Home
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/about">
                        about
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/service">
                        services
                      </NavLink>
                    </li>

                    <li>
                      <a href="/">Contact</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div className="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div className="footer-widget">
                  <div className="footer-widget-heading">
                    <h3>Subscribe</h3>
                  </div>
                  <div className="footer-text mb-25">
                    <p>
                      Don’t miss to subscribe to our new feeds, kindly fill the
                      form below.
                    </p>
                  </div>
                  <div className="subscribe-form">
                    <form action="#">
                      <input type="text" placeholder="Email Address" />
                      <button>
                        <i className="fa fa-paper-plane" aria-hidden="true"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="copyright-area">
          <div className="container">
            <div className="row">
              <div className="col-xl-6 col-lg-6 text-center text-lg-left">
                <div className="copyright-text">
                  <p>
                    Copyright &copy; 2021, All Right Reserved
                    <span className = "copyright_name"> Rupom</span>
                  </p>
                </div>
              </div>
              <div className="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                <div className="footer-menu">
                  <ul>
                    <li>
                      <NavLink exact to="/">
                        Home
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/">
                        Terms
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/">
                        Privacy
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/">
                        Policy
                      </NavLink>
                    </li>
                    <li>
                      <NavLink exact to="/contact">
                        Contact
                      </NavLink>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </>
  );
};

export default Footer;
