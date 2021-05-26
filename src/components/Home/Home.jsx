import React from "react";
import { NavLink } from "react-router-dom";
import "./Home.css";
import About from "../About/About";
import Contact from '../Contact/Contact'
import Services from "../Services/Services";
import PricePlan from "../PricePlan/PricePlan";
import sqr1 from "../../image/plants image/sqr1.jpeg";
import ver1 from "../../image/plants image/ver1.jpeg";
import ver2 from "../../image/plants image/ver2.jpeg";
import sqr2 from "../../image/plants image/sqr2.jpeg";
import land1 from "../../image/plants image/land1.jpeg";
import land2 from "../../image/plants image/land2.jpeg";
import sqr3 from "../../image/plants image/sqr3.jpeg";
import huge_land from "../../image/plants image/huge_land.jpeg";
import sqr4 from "../../image/plants image/sqr4.jpeg";
import ver3 from "../../image/plants image/ver3.jpeg";
import ver4 from "../../image/plants image/ver4.jpeg";
import ver6 from "../../image/plants image/ver6.jpeg";
import land3 from "../../image/plants image/land3.jpeg";
import ver10 from "../../image/plants image/ver10.jpeg";
import sqr5 from "../../image/plants image/sqr5.jpeg";
import Store from "../Store/Store";

const Home = ({handleCartNumber}) => {
  
  return (
    <>
      <div className="container-fluid">
        <div className="row">
          <div className="col-12">
            <div className="hero_section">
              <div className="row home ">
                <div className="col-4 col-sm-3 col-md-3 col-lg-3 ">
                  {/* Sidebar start here */}
                  <div className="social">
                    <ul>
                      <li className="twitter">
                        <a href="/">
                          Twitter
                          <i className="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li className="facebook">
                        <a href="/">
                          Facebook
                          <i className="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li className="google-plus">
                        <a href="/">
                          Google plus
                          <i
                            className="fa fa-google-plus"
                            aria-hidden="true"
                          ></i>
                        </a>
                      </li>
                      <li className="instagram">
                        <a href="/">
                          Instagram
                          <i className="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  {/* Sidebar end here */}
                </div>
                <div className="col-8 col-sm-9 col-md-9 col-lg-9  hero_text">
                  <h1 className="hey">Hey there, I'm </h1>
                  <span className="name">Rupom Raz</span>
                  <br />
                  <span className="profession">
                    A Plant Lover guy,who loves plants for their own sake and
                    knows how to cherish them
                  </span>

                  <p>
                    "Green is the prime color of the world,And that from which
                    it's loveliness arises" <br />
                    <span className="qoute_owner"> -Pedro Calderon </span>
                  </p>
                  <button className="home_btn">
                    <NavLink exact to="/contact">
                      Contact Us
                    </NavLink>
                  </button>
                  <div className="overlay"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <About />

        <div className="row gallery_sec my-5">
          <h3>Our Plant's Gallery</h3>
          <div className="col-12 col-sm-12 col-md-12 col-12 gallery_container">
            <div>
              <img src={sqr1} alt="" />
            </div>
            <div className="ver">
              <img src={ver1} alt="" />
            </div>
            <div>
              <img src={sqr2} alt="" />
            </div>
            <div className="land">
              <img src={land1} alt="" />
            </div>
            <div>
              <img src={sqr3} alt="" />
            </div>
            <div className="huge">
              <img src={huge_land} alt="" />
            </div>
            <div>
              <img src={sqr4} alt="" />
            </div>
            <div className="ver">
              <img src={ver3} alt="" />
            </div>
            <div className="ver">
              <img src={ver4} alt="" />
            </div>
            <div className="land">
              <img src={land2} alt="" />
            </div>
            <div className="ver">
              <img src={ver6} alt="" />
            </div>
            <div className="land">
              <img src={land3} alt="" />
            </div>
            <div className="ver">
              <img src={ver2} alt="" />
            </div>
            <div className="ver">
              <img src={ver10} alt="" />
            </div>
            <div>
              <img src={sqr3} alt="" />
            </div>
            <div className="land">
              <img src={huge_land} alt="" />
            </div>

            <div>
              <img src={sqr1} alt="" />
            </div>
            <div>
              <img src={sqr5} alt="" />
            </div>
          </div>
        </div>
        <Services />
        <Store handleCartNumber = {handleCartNumber} />
        <PricePlan />
        <Contact />
      </div>
    </>
  );
};

export default Home;
