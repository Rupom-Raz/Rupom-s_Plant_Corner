import React from "react";
import "./Services.css";
import first from "../../image/asset 8.png";
import second from "../../image/asset 9.png";
import third from "../../image/asset 10.png";
import four from "../../image/asset 11.png";
const Services = () => {
  return (
    <>
      <div className="container">
        <div className="row services mt-5 ">
          <h2 className="text-center mt-5">Our Services</h2>
          <div className="col-10 col-sm-6 col-md-6 col-lg-3  ">
            <div class="service1">
              <div className="item">
                <img src={first} alt="" />
                <h5>Free Shipping</h5>
                <p>On order over ৳1500</p>
              </div>
            </div>
          </div>
          <div className="col-10 col-sm-6 col-md-6 col-lg-3  ">
            <div class="service2">
              <div className="item">
                <img src={second} alt="" />
                <h5>Support</h5>
                <p>LIFE TIME SUPPORT </p>
              </div>
            </div>
          </div>
          <div className="col-10 col-sm-6 col-md-6 col-lg-3  ">
            <div class="service3">
              <div className="item">
                <img src={third} alt="" />
                <h5>Help Center</h5>
                <p>Help All Aspects</p>
              </div>
            </div>
          </div>
          <div className="col-10 col-sm-6 col-md-6 col-lg-3 ">
            <div class="service4">
              <div className="item">
                <img src={four} alt="" />
                <h5>Contact With Us</h5>
                <p>Phone:01123456258</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </>
  );
};

export default Services;
