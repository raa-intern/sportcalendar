import React from "react";
import {
  AppBar,
  Wrap,
  WrapLang,
  NavLinkStyled,
  ContactLink,
} from "./SecondHeader.styled";
import { BsFacebook } from "react-icons/bs";
import { FaTelegramPlane } from "react-icons/fa";
import { GrInstagram } from "react-icons/gr";
import { MdPhoneIphone } from "react-icons/md";
import ToogleButton from "../ToogleButton/ToogleButton";

export default function SecondHeader() {
  const changeLang = (event) => {
    console.log(event.target.name);
  };

  return (
    <AppBar>
      <Wrap>
        <ContactLink href="#" aria-label="facebook">
          <BsFacebook />
        </ContactLink>
        <ContactLink href="#" aria-label="telegram">
          <FaTelegramPlane />
        </ContactLink>
        <ContactLink href="#" aria-label="instagram">
          <GrInstagram />
        </ContactLink>
        <ContactLink href="#">
          <MdPhoneIphone />
        </ContactLink>
      </Wrap>

      <WrapLang>
        <NavLinkStyled to="/events">Допомогти проекту</NavLinkStyled>
        <ToogleButton buttons={["УКР", "ENG", "РУС"]} onClick={changeLang} />
      </WrapLang>
    </AppBar>
  );
}
