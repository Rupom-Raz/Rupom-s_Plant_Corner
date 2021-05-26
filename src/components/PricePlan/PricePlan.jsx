import React from "react";
import { NavLink } from "react-router-dom";
import "./PricePlan.css";
const PricePlan = () => {
  return (
    <>
      <div className="container d-flex justify-content-center ">
        <div className="row price_plan">
          <h3>Our Price Plan</h3>
          <div className="col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-between">
            <div class="single_price">
              <h2>Basic</h2>
              <h3>
                <span class="uppercase">Basic</span>
              </h3>
              <p>Limited Plants</p>
              <ul>
                <li>Limited Support</li>
                <li>Help Partner</li>
                <li>24/7 Support</li>
              </ul>
              <NavLink exact to="/" className="button">
                Order
              </NavLink>
            </div>
          </div>
          <div className="col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-between">
            <div className="single_price">
              <h2>Standrad</h2>
              <h3>
                <sup>৳</sup>49<span className="small">/mo</span>
              </h3>
              <p>100 Indoor Plants</p>
              <ul>
                <li>Unlimited Support</li>
                <li>Unlimited Help Partner</li>
                <li>24/7 Support</li>
              </ul>
              <NavLink exact to="/" className="button">
                Order
              </NavLink>
            </div>
          </div>
          <div className="col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-between ">
            <div className="single_price">
              <h2>Primium</h2>
              <h3>
                <sup>৳</sup>59<span className="small">/mo</span>
              </h3>
              <p>500 Indoor Plants</p>
              <ul>
                <li>Unlimited Support</li>
                <li>Unlimited Help Partner</li>
                <li>24/7 Support</li>
              </ul>
              <NavLink exact to="/" className="button">
                Order
              </NavLink>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default PricePlan;
