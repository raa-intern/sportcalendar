import styled from "@emotion/styled/macro";

export const Div = styled.div`
  display: grid;
  max-width: 360px;
  padding: 0 15px;
  margin: 0 auto;
  @media screen and (min-width: 425px) {
    max-width: 425px;
  }
  @media screen and (min-width: 768px) {
    max-width: 768px;
    padding-left: 25px;
    padding-right: 25px;
  }
  @media screen and (min-width: 1280px) {
    max-width: 1280px;
  }
`;
