import styled from "@emotion/styled/macro";

export const Wrap = styled.div`
  @media screen and (max-width: 768px) {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    background-color: var(--white-color);
    padding: 25px;
    border-radius: 15px;
  }
`;

export const Text = styled.p`
  width: 222px;
  font-weight: 400;
  font-size: 16px;
  text-align: center;
  line-height: 1.2;
  letter-spacing: 0.04em;
  margin-bottom: 20px;
  color: var(--main-color);
`;

export const TextWrap = styled.div`
  display: flex;
  align-items: center;
  flex-direction: column;
`;

export const Label = styled.label`
  display: inline-block;
  font-weight: 400;
  font-size: 10px;
  line-height: 0.85;
  letter-spacing: 0.04em;
  margin-top: 24px;
  margin-bottom: 12px;
  color: var(--black-color);
`;

export const Field = styled.input`
  padding: 8px 12px;
  border: 1px solid var(--base-color);
  border-radius: 30px;
  outline: none;
  &::placeholder {
    font-size: 12px;
    color: #a6abb9;
  }
  &:hover,
  &:focus {
    border: 1px solid var(--accent-color);
  }
`;

export const FieldWrap = styled.div`
  margin-bottom: 40px;
`;

export const Error = styled.span`
  font-weight: 400;
  font-size: 10px;
  line-height: 0.85;
  letter-spacing: 0.04em;
  margin-top: 5px;
  color: red;
`;

export const Button = styled.button`
  display: inline-block;
  width: 100%;
  padding: 10px 12px;
  margin-top: 20px;
  font-size: 12px;
  font-weight: 700;
  background-color: var(--accent-color);
  color: var(--white-color);
  text-transform: uppercase;
  border-radius: 30px;
  border: 1px solid transparent;
  cursor: pointer;
  &:hover,
  &:focus {
    box-shadow: var(--base-shadow);
  }
`;
