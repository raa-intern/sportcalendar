import React from "react";
import { NavList, NavListItem, LogoLink, Button } from "./MobileMenu.styled";

export default function MobileMenu() {
  return (
    <div>
      <NavList>
        <LogoLink href="/">Sport Calendar</LogoLink>
        <NavListItem to="/organizers" activeStyle={{ color: "#00b6e0" }}>
          Організаторам
        </NavListItem>
        <NavListItem to="/cooperation" activeStyle={{ color: "#00b6e0" }}>
          Співпраця
        </NavListItem>
        <NavListItem to="/about" activeStyle={{ color: "#00b6e0" }}>
          Про нас
        </NavListItem>
        <Button /*onClick={handleOpen}*/>Вхід | Реєстрація</Button>
      </NavList>
    </div>
  );
}
