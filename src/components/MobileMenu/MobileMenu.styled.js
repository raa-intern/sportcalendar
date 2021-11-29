import styled from "@emotion/styled/macro";
import { NavLink } from "react-router-dom";

export const NavList = styled.div`
  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
  }
`;

export const NavListItem = styled(NavLink)`
  color: var(--white-color);
  margin-bottom: 15px;
  &:focus,
  &:hover {
    color: var(--accent-color);
  }

  @media screen and (min-width: 768px) {
    font-size: 15px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 16px;
  }
`;

export const LogoLink = styled.a`
  font-size: 22px;
  font-weight: 900;
  text-transform: uppercase;
  color: var(--accent-color);
  margin-bottom: 25px;
  cursor: pointer;

  @media screen and (min-width: 768px) {
    font-size: 17px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 24px;
  }
`;

export const Button = styled.button`
  background-color: transparent;
  letter-spacing: 0.5px;
  color: var(--white-color);
  border: 1px var(--white-color);
  border-radius: 5px;
  cursor: pointer;
  &:hover,
  &:focus {
    color: var(--accent-color);
  }

  @media screen and (min-width: 768px) {
    font-size: 15px;
  }

  @media screen and (min-width: 1280px) {
    font-size: 15px;
  }
`;
